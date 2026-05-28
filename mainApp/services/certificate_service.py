# services/certificate_service.py
from io import BytesIO
from reportlab.lib.pagesizes import A4, landscape
from reportlab.lib.units import inch, mm
from reportlab.lib import colors
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, Image
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.pdfbase import pdfmetrics
from reportlab.pdfbase.ttfonts import TTFont
from django.core.files.base import ContentFile
from django.conf import settings
from PIL import Image as PILImage, ImageDraw, ImageFont
import os
from datetime import datetime
import logging

logger = logging.getLogger(__name__)

# ==================== INSTITUTE CONFIGURATION ====================
# Update these values with your institute details
INSTITUTE_NAME = "WebAsha Institute of Technology"
INSTITUTE_TAGLINE = "Empowering Dreams Through Technology"
INSTITUTE_WEBSITE = "www.webasha.com"
INSTITUTE_LOCATION = "Mumbai, India"

# ==================== INSTITUTE LOGO ====================
# Prefer a file from app static folder (works in both dev + prod builds)
INSTITUTE_LOGO_PATH = os.path.join(
    settings.BASE_DIR,
    'mainApp',
    'static',
    'images',
    'institute_logo.png',
)

# If logo isn't present in static/images, try fallback path(s) that exist in your project.
# (Windows path kept as raw string to avoid escape issues)
INSTITUTE_LOGO_FALLBACK_PATHS = [
    r"C:\WebAshaProject\New folder\assets\img\logo.png",
    # also support your local assets folder name if it differs
    r"C:\WebAshaProject\New folder\assets\img\logo.png",
    r"C:\WebAshaProject\assets\img\logo.png",
]

def _resolve_logo_path() -> str | None:
    if os.path.exists(INSTITUTE_LOGO_PATH):
        return INSTITUTE_LOGO_PATH
    for p in INSTITUTE_LOGO_FALLBACK_PATHS:
        if os.path.exists(p):
            return p
    return None

INSTITUTE_RESOLVED_LOGO_PATH = _resolve_logo_path()

# If logo file doesn't exist, we'll use a text-based logo
USE_LOGO = INSTITUTE_RESOLVED_LOGO_PATH is not None



def get_institute_logo():
    """Get institute logo as PIL Image or None if not found"""
    if not USE_LOGO or not INSTITUTE_RESOLVED_LOGO_PATH:
        return None

    try:
        return PILImage.open(INSTITUTE_RESOLVED_LOGO_PATH)
    except Exception as e:
        logger.error(f"Failed to load institute logo: {str(e)}")
        return None



def generate_certificate_pdf(certificate):
    """
    Generate PDF certificate for a user who completed a course
    with institute name and logo
    """

    # Create buffer for PDF
    buffer = BytesIO()
    
    # Create document in landscape A4
    doc = SimpleDocTemplate(buffer, pagesize=landscape(A4), 
                           rightMargin=0.5*inch, leftMargin=0.5*inch,
                           topMargin=0.5*inch, bottomMargin=0.5*inch)
    
    # Story (content) list
    story = []
    
    # Get styles
    styles = getSampleStyleSheet()
    
    # Institute name style
    institute_style = ParagraphStyle(
        'InstituteStyle',
        parent=styles['Normal'],
        fontSize=16,
        textColor=colors.HexColor('#1a56db'),
        alignment=1,  # Center
        fontName='Helvetica-Bold',
        spaceAfter=5
    )
    
    tagline_style = ParagraphStyle(
        'TaglineStyle',
        parent=styles['Normal'],
        fontSize=10,
        textColor=colors.HexColor('#6b7280'),
        alignment=1,
        fontName='Helvetica',
        spaceAfter=15
    )
    
    # Custom styles for certificate
    title_style = ParagraphStyle(
        'CustomTitle',
        parent=styles['Heading1'],
        fontSize=36,
        textColor=colors.HexColor('#1a56db'),
        alignment=1,  # Center
        spaceAfter=30,
        fontName='Helvetica-Bold'
    )
    
    subtitle_style = ParagraphStyle(
        'CustomSubtitle',
        parent=styles['Normal'],
        fontSize=18,
        textColor=colors.HexColor('#374151'),
        alignment=1,
        spaceAfter=20,
        fontName='Helvetica'
    )
    
    name_style = ParagraphStyle(
        'NameStyle',
        parent=styles['Normal'],
        fontSize=42,
        textColor=colors.HexColor('#111827'),
        alignment=1,
        spaceAfter=20,
        fontName='Helvetica-Bold'
    )
    
    course_style = ParagraphStyle(
        'CourseStyle',
        parent=styles['Normal'],
        fontSize=24,
        textColor=colors.HexColor('#1a56db'),
        alignment=1,
        spaceAfter=30,
        fontName='Helvetica-Bold'
    )
    
    date_style = ParagraphStyle(
        'DateStyle',
        parent=styles['Normal'],
        fontSize=11,
        textColor=colors.HexColor('#6b7280'),
        alignment=1,
        fontName='Helvetica'
    )
    
    # ==================== INSTITUTE HEADER ====================
    # Add institute name at top
    story.append(Paragraph(INSTITUTE_NAME, institute_style))
    story.append(Paragraph(INSTITUTE_TAGLINE, tagline_style))
    story.append(Spacer(1, 10))
    
    # Add decorative line after institute header
    # Note: ReportLab doesn't support direct line drawing in platypus easily
    # So we'll use a simple table with background color
    line_data = [['']]
    line_table = Table(line_data, colWidths=[7*inch], rowHeights=[2])
    line_table.setStyle(TableStyle([
        ('BACKGROUND', (0, 0), (-1, -1), colors.HexColor('#1a56db')),
    ]))
    story.append(line_table)
    story.append(Spacer(1, 20))
    
    # Certificate title
    story.append(Paragraph("CERTIFICATE OF COMPLETION", title_style))
    story.append(Spacer(1, 20))
    
    # Subtitle
    story.append(Paragraph("This certificate is proudly presented to", subtitle_style))
    story.append(Spacer(1, 30))
    
    # User name
    user_name = certificate.full_name
    story.append(Paragraph(user_name, name_style))
    story.append(Spacer(1, 20))
    
    # Course completion text
    story.append(Paragraph("for successfully completing the course", subtitle_style))
    story.append(Spacer(1, 10))
    
    # Course name
    story.append(Paragraph(certificate.course_title, course_style))
    story.append(Spacer(1, 30))
    
    # Additional info (if grade or score exists)
    if certificate.grade or certificate.score_percentage > 0:
        if certificate.grade:
            info_text = f"Grade: {certificate.grade} | Score: {certificate.score_percentage:.1f}%"
        else:
            info_text = f"Score: {certificate.score_percentage:.1f}%"
        
        info_style = ParagraphStyle(
            'InfoStyle',
            parent=styles['Normal'],
            fontSize=14,
            textColor=colors.HexColor('#4b5563'),
            alignment=1,
        )
        story.append(Paragraph(info_text, info_style))
        story.append(Spacer(1, 20))
    
# ==================== INSTITUTE LOGO (PDF) ====================
    # PDF version previously did not render logo. Add it if available.
    if INSTITUTE_RESOLVED_LOGO_PATH:
        try:
            logo_img = Image(INSTITUTE_RESOLVED_LOGO_PATH)
            logo_img.drawWidth = 1.0*inch
            logo_img.drawHeight = 1.0*inch
            story.append(logo_img)
            story.append(Spacer(1, 10))
        except Exception as e:
            logger.error(f"Failed to render institute logo in PDF: {str(e)}")

    # ==================== FOOTER SECTION ====================
    # Date and certificate ID

    date_text = f"Issued Date: {certificate.formatted_date}"
    certificate_id_text = f"Certificate ID: {certificate.certificate_id}"
    website_text = f"Verify at: {INSTITUTE_WEBSITE}/verify-certificate/{certificate.verification_code}"
    
    # Create footer table
    footer_data = [
        [Paragraph(date_text, date_style), Paragraph(certificate_id_text, date_style)],
        [Paragraph(website_text, date_style), Paragraph(INSTITUTE_LOCATION, date_style)]
    ]
    
    footer_table = Table(footer_data, colWidths=[3.5*inch, 3.5*inch])
    footer_table.setStyle(TableStyle([
        ('ALIGN', (0, 0), (-1, -1), 'CENTER'),
        ('VALIGN', (0, 0), (-1, -1), 'MIDDLE'),
        ('TOPPADDING', (0, 0), (-1, -1), 5),
        ('BOTTOMPADDING', (0, 0), (-1, -1), 5),
    ]))
    
    story.append(footer_table)
    story.append(Spacer(1, 20))
    
    # Build PDF
    doc.build(story)
    
    # Save to model
    buffer.seek(0)
    certificate.certificate_pdf.save(
        f"certificate_{certificate.certificate_id}.pdf",
        ContentFile(buffer.getvalue()),
        save=False
    )
    
    buffer.close()
    logger.info(f"PDF certificate generated for {certificate.certificate_id}")
    return certificate.certificate_pdf


def generate_certificate_image(certificate):
    """
    Generate certificate as image (PNG) using PIL
    with institute name and logo
    """
    # Create image
    width, height = 1920, 1080  # 16:9 aspect ratio
    img = PILImage.new('RGB', (width, height), color='white')
    draw = ImageDraw.Draw(img)
    
    # Load fonts with fallbacks
    try:
        # Try to use system fonts
        title_font = ImageFont.truetype("/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf", 72)
        name_font = ImageFont.truetype("/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf", 96)
        text_font = ImageFont.truetype("/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf", 48)
        institute_font = ImageFont.truetype("/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf", 36)
        small_font = ImageFont.truetype("/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf", 24)
    except:
        try:
            # Windows fonts
            title_font = ImageFont.truetype("arialbd.ttf", 72)
            name_font = ImageFont.truetype("arialbd.ttf", 96)
            text_font = ImageFont.truetype("arial.ttf", 48)
            institute_font = ImageFont.truetype("arialbd.ttf", 36)
            small_font = ImageFont.truetype("arial.ttf", 24)
        except:
            # Fallback to default font
            title_font = ImageFont.load_default()
            name_font = ImageFont.load_default()
            text_font = ImageFont.load_default()
            institute_font = ImageFont.load_default()
            small_font = ImageFont.load_default()
    
    # Helper function to center text
    def center_text(text, font, y_position, color='#1a56db'):
        bbox = draw.textbbox((0, 0), text, font=font)
        text_width = bbox[2] - bbox[0]
        x = (width - text_width) // 2
        draw.text((x, y_position), text, font=font, fill=color)
    
    # ==================== INSTITUTE LOGO (if available) ====================
    logo = get_institute_logo()
    if logo:
        # Resize logo to fit (max 150x150)
        logo_size = 120
        logo.thumbnail((logo_size, logo_size), PILImage.Resampling.LANCZOS)
        
        # Calculate position (top center)
        logo_width, logo_height = logo.size
        logo_x = (width - logo_width) // 2
        logo_y = 40
        
        # Convert PIL Image to RGB if necessary
        if logo.mode != 'RGB':
            logo = logo.convert('RGB')
        
        img.paste(logo, (logo_x, logo_y))
        
        # Adjust Y position for text after logo
        institute_y = 40 + logo_height + 10
    else:
        institute_y = 60
    
    # ==================== INSTITUTE HEADER ====================
    # Institute name
    center_text(INSTITUTE_NAME, institute_font, institute_y, '#1a56db')
    
    # Institute tagline
    center_text(INSTITUTE_TAGLINE, small_font, institute_y + 40, '#6b7280')
    
    # Decorative line
    line_y = institute_y + 80
    draw.line([200, line_y, width-200, line_y], fill='#1a56db', width=3)
    
    # ==================== CERTIFICATE CONTENT ====================
    # Certificate title
    center_text("CERTIFICATE OF COMPLETION", title_font, line_y + 80, '#1a56db')
    
    # Subtitle
    center_text("This certificate is proudly presented to", text_font, line_y + 180, '#374151')
    
    # User name
    user_name = certificate.full_name
    center_text(user_name, name_font, line_y + 320, '#111827')
    
    # Course completion text
    center_text("for successfully completing the course", text_font, line_y + 470, '#374151')
    
    # Course name
    course_name = certificate.course_title
    center_text(course_name, title_font, line_y + 540, '#1a56db')
    
    # Additional info (if grade or score exists)
    current_y = line_y + 640
    if certificate.grade or certificate.score_percentage > 0:
        if certificate.grade:
            info_text = f"Grade: {certificate.grade} | Score: {certificate.score_percentage:.1f}%"
        else:
            info_text = f"Score: {certificate.score_percentage:.1f}%"
        center_text(info_text, text_font, current_y, '#4b5563')
        current_y += 60
    
    # ==================== FOOTER ====================
    # Decorative line before footer
    draw.line([200, height-180, width-200, height-180], fill='#1a56db', width=2)
    
    # Date
    date_text = f"Issued: {certificate.formatted_date}"
    center_text(date_text, small_font, height-140, '#6b7280')
    
    # Certificate ID
    cert_id_text = f"Certificate ID: {certificate.certificate_id}"
    center_text(cert_id_text, small_font, height-110, '#6b7280')
    
    # Institute website and location
    footer_text = f"{INSTITUTE_WEBSITE} | {INSTITUTE_LOCATION}"
    center_text(footer_text, small_font, height-80, '#9ca3af')
    
    # Verification note
    verify_text = f"Verify at: {INSTITUTE_WEBSITE}/verify-certificate/{certificate.verification_code}"
    center_text(verify_text, small_font, height-50, '#9ca3af')
    
    # Save image
    img_buffer = BytesIO()
    img.save(img_buffer, format='PNG')
    img_buffer.seek(0)
    
    certificate.certificate_image.save(
        f"certificate_{certificate.certificate_id}.png",
        ContentFile(img_buffer.getvalue()),
        save=False
    )
    
    logger.info(f"Certificate image generated for {certificate.certificate_id}")
    return certificate.certificate_image