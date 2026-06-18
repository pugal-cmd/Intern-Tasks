<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Business Enquiry Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; margin: 0; padding: 20px; background-color: #f4f4f4; }
        .container { max-width: 600px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .header { text-align: center; margin-bottom: 30px; }
        .logo { font-size: 32px; font-weight: bold; background: linear-gradient(45deg, #6366f1, #ec4899); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .content { margin-bottom: 30px; }
        .details { background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0; }
        .footer { text-align: center; color: #666; font-size: 14px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">PicQ</div>
            <h1>Thank You for Your Enquiry!</h1>
        </div>
        
        <div class="content">
            <p>Dear {{ $enquiry->name }},</p>
            
            <p>Thank you for your business enquiry with PicQ. We have received your request and our team will get back to you within 24 hours.</p>
            
            <div class="details">
                <h3>Your Enquiry Details:</h3>
                <p><strong>Name:</strong> {{ $enquiry->name }}</p>
                <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                <p><strong>Mobile:</strong> {{ $enquiry->mobile }}</p>
                <p><strong>Services Required:</strong> {{ $enquiry->services_required }}</p>
                <p><strong>Budget:</strong> {{ $enquiry->budget }}</p>
                @if($enquiry->notes)
                <p><strong>Notes:</strong> {{ $enquiry->notes }}</p>
                @endif
                <p><strong>Submitted:</strong> {{ $enquiry->created_at->format('d M Y, h:i A') }}</p>
            </div>
            
            <p>In the meantime, feel free to explore our services and portfolio on our website.</p>
            
            <p>Best regards,<br>The PicQ Team</p>
        </div>
        
        <div class="footer">
            <p>This is an automated email. Please do not reply to this message.</p>
            <p>&copy; {{ date('Y') }} PicQ. All rights reserved.</p>
        </div>
    </div>
</body>
</html>