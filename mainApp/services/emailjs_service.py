"""
EmailJS Service for WebAsha Learning Platform
Sends emails using EmailJS API
"""

import requests
import json
import logging
from django.conf import settings
from django.urls import reverse

logger = logging.getLogger(__name__)


class EmailJSService:
    """Service class for sending emails via EmailJS"""
    
    def __init__(self):
        self.api_url = "https://api.emailjs.com/api/v1.0/email/send"
        self.service_id = getattr(settings, 'EMAILJS_SERVICE_ID', 'service_70zmrya')
        self.template_id = getattr(settings, 'EMAILJS_TEMPLATE_ID', 'template_uwofnd9')
        self.user_id = getattr(settings, 'EMAILJS_USER_ID', '')
        self.access_token = getattr(settings, 'EMAILJS_ACCESS_TOKEN', '')
    
    def send_invoice_email(self, invoice, request=None):
        """
        Send invoice email to customer with PDF download link
        
        Args:
            invoice: Invoice model instance
            request: Django request object (to generate absolute URL)
        
        Returns:
            tuple: (success: bool, message: str)
        """
        try:
            # Generate download link
            if request:
                download_link = request.build_absolute_uri(
                    reverse('download_invoice_pdf', args=[invoice.id])
                )
            else:
                download_link = f"/invoice/{invoice.id}/download/"
            
            # Format amounts
            total_amount = f"₹{float(invoice.total_amount):,.2f}"
            base_amount = f"₹{float(invoice.base_amount):,.2f}"
            tax_amount = f"₹{float(invoice.tax_amount):,.2f}"
            
            # Prepare template parameters matching your EmailJS template
            template_params = {
                'order_id': invoice.invoice_number,
                'name': invoice.get_course_title,
                'units': '1',
                'price': base_amount,
                'cost_shipping': '₹0.00',
                'cost_tax': tax_amount,
                'cost_total': total_amount,
                'email': invoice.customer_email,
                'customer_name': invoice.customer_name,
                'invoice_date': invoice.invoice_date.strftime('%d %B, %Y'),
                'payment_status': invoice.payment_status.upper(),
                'download_link': download_link,
            }
            
            # Payload for EmailJS API
            payload = {
                'service_id': self.service_id,
                'template_id': self.template_id,
                'user_id': self.user_id,
                'accessToken': self.access_token,
                'template_params': template_params
            }
            
            logger.info(f"Sending email to {invoice.customer_email} with params: {template_params}")
            
            # Send request
            response = requests.post(
                self.api_url,
                json=payload,
                headers={'Content-Type': 'application/json'}
            )
            
            if response.status_code == 200:
                logger.info(f"Invoice email sent to {invoice.customer_email} for invoice {invoice.invoice_number}")
                return True, "Email sent successfully"
            else:
                logger.error(f"EmailJS error: {response.status_code} - {response.text}")
                return False, f"Failed to send email: {response.text}"
                
        except Exception as e:
            logger.error(f"Exception sending invoice email: {str(e)}")
            return False, str(e)
    
    def send_test_email(self, test_email):
        """
        Send a test email to verify configuration
        """
        try:
            payload = {
                'service_id': self.service_id,
                'template_id': self.template_id,
                'user_id': self.user_id,
                'accessToken': self.access_token,
                'template_params': {
                    'order_id': 'TEST-001',
                    'name': 'Test Course',
                    'units': '1',
                    'price': '₹1,000.00',
                    'cost_shipping': '₹0.00',
                    'cost_tax': '₹180.00',
                    'cost_total': '₹1,180.00',
                    'email': test_email,
                    'customer_name': 'Test User',
                    'invoice_date': 'Test Date',
                    'payment_status': 'TEST',
                    'download_link': '#',
                }
            }
            
            response = requests.post(
                self.api_url,
                json=payload,
                headers={'Content-Type': 'application/json'}
            )
            
            if response.status_code == 200:
                return True, "Test email sent successfully"
            else:
                return False, f"Failed: {response.text}"
                
        except Exception as e:
            return False, str(e)


def send_invoice_email(invoice, request=None):
    """
    Convenience function to send invoice email
    """
    service = EmailJSService()
    return service.send_invoice_email(invoice, request)


def send_test_email(test_email):
    """
    Convenience function to send test email
    """
    service = EmailJSService()
    return service.send_test_email(test_email)