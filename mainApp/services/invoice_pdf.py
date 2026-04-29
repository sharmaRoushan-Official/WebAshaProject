"""
PDF Invoice Generator for WebAsha Learning Platform
Uses reportlab to generate PDF invoices
"""

import io
from datetime import datetime
from decimal import Decimal
from reportlab.lib import colors
from reportlab.lib.pagesizes import A4
from reportlab.lib.units import inch, mm
from reportlab.platypus import SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle, HRFlowable, PageBreak
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.lib.enums import TA_CENTER, TA_RIGHT, TA_LEFT
from reportlab.pdfgen import canvas
import logging

logger = logging.getLogger(__name__)


def generate_invoice_pdf(invoice):
    """
    Generate PDF invoice for a given invoice object
    
    Args:
        invoice: Invoice model instance
    
    Returns:
        io.BytesIO: PDF file as bytes buffer
    """
    
    buffer = io.BytesIO()
    
    # Create PDF document
    doc = SimpleDocTemplate(
        buffer,
        pagesize=A4,
        topMargin=20*mm,
        bottomMargin=20*mm,
        leftMargin=20*mm,
        rightMargin=20*mm
    )
    
    # Styles
    styles = getSampleStyleSheet()
    
    # Custom styles
    title_style = ParagraphStyle(
        'TitleStyle',
        parent=styles['Heading1'],
        fontSize=24,
        textColor=colors.HexColor('#1a237e'),
        alignment=TA_CENTER,
        spaceAfter=20,
        fontName='Helvetica-Bold'
    )
    
    heading_style = ParagraphStyle(
        'HeadingStyle',
        parent=styles['Heading2'],
        fontSize=14,
        textColor=colors.HexColor('#0d47a1'),
        spaceAfter=10,
        fontName='Helvetica-Bold'
    )
    
    normal_style = ParagraphStyle(
        'NormalStyle',
        parent=styles['Normal'],
        fontSize=10,
        spaceAfter=6,
        fontName='Helvetica'
    )
    
    bold_style = ParagraphStyle(
        'BoldStyle',
        parent=styles['Normal'],
        fontSize=10,
        fontName='Helvetica-Bold',
        spaceAfter=6
    )
    
    right_align = ParagraphStyle(
        'RightAlign',
        parent=styles['Normal'],
        alignment=TA_RIGHT,
        fontSize=10,
        fontName='Helvetica'
    )
    
    center_style = ParagraphStyle(
        'CenterStyle',
        parent=styles['Normal'],
        alignment=TA_CENTER,
        fontSize=10,
        fontName='Helvetica'
    )
    
    # Build story (content)
    story = []
    
    # ===== HEADER SECTION =====
    # Company Name
    company_name = Paragraph("WebAsha Technologies", title_style)
    story.append(company_name)
    
    # Company Details
    company_details_text = """
    WebAsha Learning Platform<br/>
    123, Tech Park, Electronic City<br/>
    Bangalore - 560100, Karnataka, India<br/>
    Email: support@webasha.com | Phone: +91 98765 43210<br/>
    GST: 29ABCDE1234F1Z5
    """
    story.append(Paragraph(company_details_text, normal_style))
    story.append(Spacer(1, 10))
    story.append(HRFlowable(width="100%", thickness=1, color=colors.HexColor('#1a237e')))
    story.append(Spacer(1, 20))
    
    # ===== INVOICE TITLE =====
    story.append(Paragraph("TAX INVOICE", title_style))
    story.append(Spacer(1, 20))
    
    # ===== INVOICE INFO TABLE =====
    invoice_date_str = invoice.invoice_date.strftime('%d %B, %Y')
    payment_status_text = invoice.payment_status.upper()
    status_color = 'green' if payment_status_text == 'PAID' else 'orange'
    
    invoice_data = [
        ["Invoice Number:", invoice.invoice_number, "Invoice Date:", invoice_date_str],
        ["Order Number:", invoice.payment_transaction_id[:20] + "...", "Payment Status:", payment_status_text],
    ]
    
    invoice_table = Table(invoice_data, colWidths=[80, 160, 80, 160])
    invoice_table.setStyle(TableStyle([
        ('FONTNAME', (0, 0), (-1, -1), 'Helvetica'),
        ('FONTSIZE', (0, 0), (-1, -1), 10),
        ('VALIGN', (0, 0), (-1, -1), 'TOP'),
        ('TOPPADDING', (0, 0), (-1, -1), 5),
        ('BOTTOMPADDING', (0, 0), (-1, -1), 5),
        ('TEXTCOLOR', (3, 1), (3, 1), colors.green if payment_status_text == 'PAID' else colors.orange),
        ('FONTNAME', (3, 1), (3, 1), 'Helvetica-Bold'),
    ]))
    story.append(invoice_table)
    story.append(Spacer(1, 20))
    
    # ===== BILL TO SECTION =====
    story.append(Paragraph("Bill To:", heading_style))
    
    customer_info_text = f"""
    <b>{invoice.customer_name}</b><br/>
    {invoice.customer_address if invoice.customer_address else 'N/A'}<br/>
    Email: {invoice.customer_email}<br/>
    Phone: {invoice.customer_phone if invoice.customer_phone else 'N/A'}
    """
    story.append(Paragraph(customer_info_text, normal_style))
    story.append(Spacer(1, 20))
    
    # ===== COURSE DETAILS TABLE =====
    story.append(Paragraph("Course Details:", heading_style))
    
    course_title = invoice.get_course_title
    
    # Course details table
    course_table_data = [
        ["Description", "Course Name", "Tax Rate", "Amount (₹)"],
        ["Course / Training", course_title, f"{float(invoice.tax_rate)}%", f"{float(invoice.base_amount):,.2f}"],
    ]
    
    course_table = Table(course_table_data, colWidths=[80, 250, 80, 100])
    course_table.setStyle(TableStyle([
        ('BACKGROUND', (0, 0), (-1, 0), colors.HexColor('#1a237e')),
        ('TEXTCOLOR', (0, 0), (-1, 0), colors.whitesmoke),
        ('ALIGN', (0, 0), (-1, -1), 'LEFT'),
        ('ALIGN', (3, 0), (3, -1), 'RIGHT'),
        ('FONTNAME', (0, 0), (-1, 0), 'Helvetica-Bold'),
        ('FONTSIZE', (0, 0), (-1, 0), 10),
        ('FONTNAME', (0, 1), (-1, -1), 'Helvetica'),
        ('FONTSIZE', (0, 1), (-1, -1), 10),
        ('GRID', (0, 0), (-1, -1), 0.5, colors.grey),
        ('TOPPADDING', (0, 0), (-1, -1), 8),
        ('BOTTOMPADDING', (0, 0), (-1, -1), 8),
    ]))
    story.append(course_table)
    story.append(Spacer(1, 20))
    
    # ===== TAX SUMMARY TABLE =====
    story.append(Paragraph("Tax Summary:", heading_style))
    
    tax_table_data = [
        ["Particulars", "Rate", "Taxable Value (₹)", "Tax Amount (₹)"],
        ["IGST", f"{float(invoice.tax_rate)}%", f"{float(invoice.base_amount):,.2f}", f"{float(invoice.tax_amount):,.2f}"],
    ]
    
    tax_table = Table(tax_table_data, colWidths=[120, 80, 120, 120])
    tax_table.setStyle(TableStyle([
        ('BACKGROUND', (0, 0), (-1, 0), colors.HexColor('#1a237e')),
        ('TEXTCOLOR', (0, 0), (-1, 0), colors.whitesmoke),
        ('ALIGN', (0, 0), (-1, -1), 'LEFT'),
        ('ALIGN', (1, 0), (-1, -1), 'CENTER'),
        ('ALIGN', (2, 0), (-1, -1), 'RIGHT'),
        ('FONTNAME', (0, 0), (-1, 0), 'Helvetica-Bold'),
        ('FONTSIZE', (0, 0), (-1, 0), 10),
        ('FONTNAME', (0, 1), (-1, -1), 'Helvetica'),
        ('FONTSIZE', (0, 1), (-1, -1), 10),
        ('GRID', (0, 0), (-1, -1), 0.5, colors.grey),
        ('TOPPADDING', (0, 0), (-1, -1), 8),
        ('BOTTOMPADDING', (0, 0), (-1, -1), 8),
    ]))
    story.append(tax_table)
    story.append(Spacer(1, 20))
    
    # ===== TOTAL AMOUNT =====
    total_table_data = [
        ["", "", "Subtotal:", f"{float(invoice.base_amount):,.2f}"],
        ["", "", f"IGST ({float(invoice.tax_rate)}%):", f"{float(invoice.tax_amount):,.2f}"],
        ["", "", "Total Amount:", f"{float(invoice.total_amount):,.2f}"],
    ]
    
    total_table = Table(total_table_data, colWidths=[200, 100, 100, 100])
    total_table.setStyle(TableStyle([
        ('FONTNAME', (0, 0), (-1, -1), 'Helvetica'),
        ('FONTSIZE', (0, 0), (-1, -1), 11),
        ('ALIGN', (2, 0), (-1, -1), 'RIGHT'),
        ('TOPPADDING', (0, 0), (-1, -1), 6),
        ('BOTTOMPADDING', (0, 0), (-1, -1), 6),
        ('BACKGROUND', (2, 2), (3, 2), colors.HexColor('#e3f2fd')),
        ('FONTNAME', (2, 2), (3, 2), 'Helvetica-Bold'),
    ]))
    story.append(total_table)
    story.append(Spacer(1, 20))
    
    # ===== AMOUNT IN WORDS =====
    def number_to_words(amount):
        """Convert number to words using built-in Python only"""
        try:
            rupees = int(amount)
            paise = int(round((amount - rupees) * 100))
            
            ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine',
                    'Ten', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 
                    'Seventeen', 'Eighteen', 'Nineteen']
            tens = ['', '', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety']
            
            def convert_less_than_thousand(n):
                if n == 0:
                    return ''
                elif n < 20:
                    return ones[n]
                elif n < 100:
                    return tens[n // 10] + (' ' + ones[n % 10] if n % 10 != 0 else '')
                else:
                    return ones[n // 100] + ' Hundred' + (' ' + convert_less_than_thousand(n % 100) if n % 100 != 0 else '')
            
            def convert_number(n):
                if n == 0:
                    return 'Zero'
                result = ''
                if n >= 10000000:
                    result += convert_less_than_thousand(n // 10000000) + ' Crore '
                    n %= 10000000
                if n >= 100000:
                    result += convert_less_than_thousand(n // 100000) + ' Lakh '
                    n %= 100000
                if n >= 1000:
                    result += convert_less_than_thousand(n // 1000) + ' Thousand '
                    n %= 1000
                if n > 0:
                    result += convert_less_than_thousand(n)
                return result.strip()
            
            rupees_word = convert_number(rupees)
            if paise > 0:
                paise_word = convert_number(paise)
                return f"{rupees_word} Rupees and {paise_word} Paise Only"
            else:
                return f"{rupees_word} Rupees Only"
                
        except Exception:
            return f"Rupees {float(amount):,.2f} Only"
    
    amount_in_words_text = f"Amount in Words: {number_to_words(float(invoice.total_amount))}"
    story.append(Paragraph(amount_in_words_text, bold_style))
    story.append(Spacer(1, 20))
    
    # ===== FOOTER NOTES =====
    story.append(HRFlowable(width="100%", thickness=0.5, color=colors.grey))
    story.append(Spacer(1, 10))
    
    footer_notes_text = """
    Terms & Conditions:<br/>
    1. This is a computer generated invoice and does not require physical signature.<br/>
    2. Course access will be granted immediately upon successful payment.<br/>
    3. For support, please contact support@webasha.com<br/>
    4. Thank you for choosing WebAsha Technologies!
    """
    story.append(Paragraph(footer_notes_text, normal_style))
    
    # Build PDF
    doc.build(story)
    buffer.seek(0)
    
    return buffer


def save_pdf_to_model(invoice):
    """
    Generate PDF and save to invoice model's pdf_file field
    
    Args:
        invoice: Invoice model instance
    
    Returns:
        bool: True if successful, False otherwise
    """
    try:
        from django.core.files.base import ContentFile
        from django.utils import timezone
        
        pdf_buffer = generate_invoice_pdf(invoice)
        filename = f"invoice_{invoice.invoice_number}.pdf"
        
        invoice.pdf_file.save(filename, ContentFile(pdf_buffer.getvalue()), save=True)
        return True
    except Exception as e:
        logger.error(f"Failed to save PDF for invoice {invoice.invoice_number}: {str(e)}")
        return False