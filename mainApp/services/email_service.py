# mainApp/services/email_service.py

import os
import resend
from django.conf import settings

# Initialize Resend with API key
RESEND_API_KEY = os.environ.get('RESEND_EMAIL_API')
if RESEND_API_KEY:
    resend.api_key = RESEND_API_KEY

# Default sender email (Resend's official sender)
DEFAULT_FROM_EMAIL = "Resend <onboarding@resend.dev>"

def send_password_reset_otp_email(user_email, otp_code, user_name=""):
    """
    Send password reset OTP email using Resend
    Returns: (success: bool, message: str)
    """
    try:
        if not RESEND_API_KEY:
            return False, "Email service not configured. Please set RESEND_EMAIL_API in environment."
        
        # Simple, clean email content (avoid spam triggers)
        html_content = f"""
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Password Reset OTP</title>
            <style>
                body {{
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    color: #333;
                }}
                .container {{
                    max-width: 500px;
                    margin: 0 auto;
                    padding: 20px;
                }}
                .header {{
                    background: #dc3545;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    border-radius: 8px 8px 0 0;
                }}
                .content {{
                    background: #f9f9f9;
                    padding: 30px;
                    border-radius: 0 0 8px 8px;
                }}
                .otp-code {{
                    font-size: 32px;
                    font-weight: bold;
                    text-align: center;
                    background: white;
                    padding: 15px;
                    margin: 20px 0;
                    border-radius: 8px;
                    letter-spacing: 5px;
                    font-family: monospace;
                }}
                .footer {{
                    text-align: center;
                    font-size: 12px;
                    color: #666;
                    margin-top: 20px;
                    padding-top: 20px;
                    border-top: 1px solid #ddd;
                }}
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Password Reset Request</h2>
                </div>
                <div class="content">
                    <p>Hello {user_name or 'User'},</p>
                    <p>We received a request to reset your password. Use the code below to verify your identity:</p>
                    <div class="otp-code">{otp_code}</div>
                    <p>This code is valid for <strong>10 minutes</strong>.</p>
                    <p>If you did not request this, please ignore this email.</p>
                </div>
                <div class="footer">
                    <p>This email was sent via Resend</p>
                </div>
            </div>
        </body>
        </html>
        """
        
        plain_text_content = f"""
        Password Reset Request
        
        Hello {user_name or 'User'},
        
        We received a request to reset your password.
        
        Your verification code is: {otp_code}
        
        This code is valid for 10 minutes.
        
        If you did not request this, please ignore this email.
        
        ---
        This email was sent via Resend
        """
        
        # Email parameters
        params = {
            "from": DEFAULT_FROM_EMAIL,
            "to": [user_email],
            "subject": "Password Reset Code",
            "html": html_content,
            "text": plain_text_content,
        }
        
        # Send email using Resend
        try:
            from resend import Emails
            response = Emails.send(params)
        except ImportError:
            response = resend.Emails.send(params)
        
        if response and hasattr(response, 'id'):
            return True, "Verification code sent successfully"
        else:
            return False, "Failed to send email"
            
    except Exception as e:
        print(f"Error sending email: {str(e)}")
        return False, "Unable to send email at this time"


def send_password_reset_success_email(user_email, user_name=""):
    """Send confirmation email after password reset"""
    try:
        if not RESEND_API_KEY:
            return False
        
        html_content = f"""
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Password Updated</title>
            <style>
                body {{
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    color: #333;
                }}
                .container {{
                    max-width: 500px;
                    margin: 0 auto;
                    padding: 20px;
                }}
                .header {{
                    background: #28a745;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    border-radius: 8px 8px 0 0;
                }}
                .content {{
                    background: #f9f9f9;
                    padding: 30px;
                    border-radius: 0 0 8px 8px;
                }}
                .footer {{
                    text-align: center;
                    font-size: 12px;
                    color: #666;
                    margin-top: 20px;
                    padding-top: 20px;
                    border-top: 1px solid #ddd;
                }}
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Password Updated</h2>
                </div>
                <div class="content">
                    <p>Hello {user_name or 'User'},</p>
                    <p>Your password has been successfully changed.</p>
                    <p>If you did not make this change, please contact support immediately.</p>
                </div>
                <div class="footer">
                    <p>This email was sent via Resend</p>
                </div>
            </div>
        </body>
        </html>
        """
        
        plain_text_content = f"""
        Password Updated
        
        Hello {user_name or 'User'},
        
        Your password has been successfully changed.
        
        If you did not make this change, please contact support immediately.
        
        ---
        This email was sent via Resend
        """
        
        params = {
            "from": DEFAULT_FROM_EMAIL,
            "to": [user_email],
            "subject": "Password Updated Successfully",
            "html": html_content,
            "text": plain_text_content,
        }
        
        # Send email using Resend
        try:
            from resend import Emails
            Emails.send(params)
        except ImportError:
            resend.Emails.send(params)
        except Exception as e:
            print(f"Error sending confirmation email: {str(e)}")
            return False
            
        return True
        
    except Exception as e:
        print(f"Error in send_password_reset_success_email: {str(e)}")
        return False


def send_welcome_email(user_email, user_name=""):
    """
    Send welcome email to new users
    """
    try:
        if not RESEND_API_KEY:
            return False
        
        html_content = f"""
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Welcome Aboard</title>
            <style>
                body {{
                    font-family: Arial, sans-serif;
                    line-height: 1.6;
                    color: #333;
                }}
                .container {{
                    max-width: 500px;
                    margin: 0 auto;
                    padding: 20px;
                }}
                .header {{
                    background: #dc3545;
                    color: white;
                    padding: 20px;
                    text-align: center;
                    border-radius: 8px 8px 0 0;
                }}
                .content {{
                    background: #f9f9f9;
                    padding: 30px;
                    border-radius: 0 0 8px 8px;
                }}
                .button {{
                    display: inline-block;
                    background: #dc3545;
                    color: white;
                    padding: 10px 20px;
                    text-decoration: none;
                    border-radius: 5px;
                    margin-top: 15px;
                }}
                .footer {{
                    text-align: center;
                    font-size: 12px;
                    color: #666;
                    margin-top: 20px;
                    padding-top: 20px;
                    border-top: 1px solid #ddd;
                }}
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <h2>Welcome to WebAsha</h2>
                </div>
                <div class="content">
                    <p>Hello {user_name or 'User'},</p>
                    <p>Thank you for joining us. We're excited to have you on board.</p>
                    <p>Start exploring our courses to begin your learning journey.</p>
                </div>
                <div class="footer">
                    <p>This email was sent via Resend</p>
                </div>
            </div>
        </body>
        </html>
        """
        
        plain_text_content = f"""
        Welcome to WebAsha
        
        Hello {user_name or 'User'},
        
        Thank you for joining us. We're excited to have you on board.
        
        Start exploring our courses to begin your learning journey.
        
        ---
        This email was sent via Resend
        """
        
        params = {
            "from": DEFAULT_FROM_EMAIL,
            "to": [user_email],
            "subject": "Welcome to WebAsha",
            "html": html_content,
            "text": plain_text_content,
        }
        
        try:
            from resend import Emails
            Emails.send(params)
        except ImportError:
            resend.Emails.send(params)
        return True
        
    except Exception as e:
        print(f"Error sending welcome email: {str(e)}")
        return False


def send_test_email():
    """Test function to verify email configuration"""
    try:
        params = {
            "from": DEFAULT_FROM_EMAIL,
            "to": ["test@example.com"],
            "subject": "Test Email",
            "html": "<p>This is a test email from WebAsha.</p>",
            "text": "This is a test email from WebAsha.",
        }
        
        from resend import Emails
        response = Emails.send(params)
        return True, "Test email sent successfully"
    except Exception as e:
        return False, f"Test failed: {str(e)}"