# services/certificate_service.py
from io import BytesIO
from reportlab.lib.pagesizes import A4, landscape
from reportlab.lib.units import inch, mm
from reportlab.lib import colors
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, Image
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.lib.fonts import addMapping
from reportlab.pdfbase import pdfmetrics
from reportlab.pdfbase.ttfonts import TTFont
from django.core.files.base import ContentFile
from django.conf import settings
from PIL import Image as PILImage, ImageDraw, ImageFont
import os
from datetime import datetime


def generate_certificate_pdf(certificate):
    """
    Generate PDF certificate for a user who completed a course
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
    
    # Custom styles
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
        fontSize=12,
        textColor=colors.HexColor('#6b7280'),
        alignment=1,
        fontName='Helvetica'
    )
    
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
    story.append(Paragraph(f"for successfully completing the course", subtitle_style))
    story.append(Spacer(1, 10))
    
    # Course name
    story.append(Paragraph(certificate.course_title, course_style))
    story.append(Spacer(1, 30))
    
    # Additional info (if grade or score exists)
    if certificate.grade or certificate.score_percentage > 0:
        info_text = f"Grade: {certificate.grade} | Score: {certificate.score_percentage:.1f}%" if certificate.grade else f"Score: {certificate.score_percentage:.1f}%"
        info_style = ParagraphStyle(
            'InfoStyle',
            parent=styles['Normal'],
            fontSize=14,
            textColor=colors.HexColor('#4b5563'),
            alignment=1,
        )
        story.append(Paragraph(info_text, info_style))
        story.append(Spacer(1, 20))
    
    # Bottom info (date + certificate id) — QR code removed
    date_text = f"Issued Date: {certificate.formatted_date}"
    certificate_id_text = f"Certificate ID: {certificate.certificate_id}"

    bottom_data = [[Paragraph(date_text, date_style), Paragraph(certificate_id_text, date_style)]]
    bottom_table = Table(bottom_data, colWidths=[3*inch, 3*inch])
    bottom_table.setStyle(TableStyle([
        ('ALIGN', (0, 0), (0, 0), 'CENTER'),
        ('ALIGN', (1, 0), (1, 0), 'CENTER'),
        ('VALIGN', (0, 0), (-1, -1), 'MIDDLE'),
    ]))

    story.append(bottom_table)
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
    return certificate.certificate_pdf


def generate_certificate_image(certificate):
    """
    Generate certificate as image (PNG) using PIL
    """
    # Create image
    width, height = 1920, 1080  # 16:9 aspect ratio
    img = PILImage.new('RGB', (width, height), color='white')
    draw = ImageDraw.Draw(img)
    
    # Load fonts
    try:
        title_font = ImageFont.truetype("/usr/share/fonts/truetype/liberation/LiberationSerif-Bold.ttf", 72)
        name_font = ImageFont.truetype("/usr/share/fonts/truetype/liberation/LiberationSerif-Bold.ttf", 96)
        text_font = ImageFont.truetype("/usr/share/fonts/truetype/liberation/LiberationSerif-Regular.ttf", 48)
    except:
        title_font = ImageFont.load_default()
        name_font = ImageFont.load_default()
        text_font = ImageFont.load_default()
    
    # Draw border
    draw.rectangle([50, 50, width-50, height-50], outline='#1a56db', width=10)
    
    # Draw decorative lines
    draw.line([200, 200, width-200, 200], fill='#1a56db', width=3)
    draw.line([200, height-200, width-200, height-200], fill='#1a56db', width=3)
    
    # Calculate text positions
    title = "CERTIFICATE OF COMPLETION"
    title_bbox = draw.textbbox((0, 0), title, font=title_font)
    title_width = title_bbox[2] - title_bbox[0]
    draw.text(((width - title_width) // 2, 150), title, font=title_font, fill='#1a56db')
    
    # Subtitle
    subtitle = "This certificate is proudly presented to"
    subtitle_bbox = draw.textbbox((0, 0), subtitle, font=text_font)
    subtitle_width = subtitle_bbox[2] - subtitle_bbox[0]
    draw.text(((width - subtitle_width) // 2, 350), subtitle, font=text_font, fill='#374151')
    
    # Name
    user_name = certificate.full_name
    name_bbox = draw.textbbox((0, 0), user_name, font=name_font)
    name_width = name_bbox[2] - name_bbox[0]
    draw.text(((width - name_width) // 2, 500), user_name, font=name_font, fill='#111827')
    
    # Course completion text
    course_text = f"for successfully completing"
    course_bbox = draw.textbbox((0, 0), course_text, font=text_font)
    course_width = course_bbox[2] - course_bbox[0]
    draw.text(((width - course_width) // 2, 650), course_text, font=text_font, fill='#374151')
    
    # Course name
    course_name = certificate.course_title
    course_bbox = draw.textbbox((0, 0), course_name, font=text_font)
    course_width = course_bbox[2] - course_bbox[0]
    draw.text(((width - course_width) // 2, 720), course_name, font=text_font, fill='#1a56db')
    
    # Date and certificate ID
    date_text = f"Issued: {certificate.formatted_date}  |  Certificate ID: {certificate.certificate_id}"
    date_bbox = draw.textbbox((0, 0), date_text, font=text_font)
    date_width = date_bbox[2] - date_bbox[0]
    draw.text(((width - date_width) // 2, 900), date_text, font=text_font, fill='#6b7280')
    
    # Save image
    img_buffer = BytesIO()
    img.save(img_buffer, format='PNG')
    img_buffer.seek(0)
    
    certificate.certificate_image.save(
        f"certificate_{certificate.certificate_id}.png",
        ContentFile(img_buffer.getvalue()),
        save=False
    )
    
    return certificate.certificate_image