<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vendor Registration Confirmation</title>
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
            <h1>Welcome to PicQ!</h1>
        </div>
        
        <div class="content">
            <p>Dear {{ $vendor->full_name }},</p>
            
            <p>Congratulations! Your vendor registration with PicQ has been successfully completed. We're excited to have you join our network of professional creators.</p>
            
            <div class="details">
                <h3>Your Registration Details:</h3>
                <p><strong>Full Name:</strong> {{ $vendor->full_name }}</p>
                <p><strong>Studio Name:</strong> {{ $vendor->studio_name }}</p>
                <p><strong>Email:</strong> {{ $vendor->email }}</p>
                <p><strong>Phone:</strong> {{ $vendor->phone }}</p>
                <p><strong>Services:</strong> {{ $vendor->services_provided }}</p>
                <p><strong>Price:</strong> ₹{{ number_format($vendor->price) }}</p>
                <p><strong>Experience:</strong> {{ $vendor->experience }}</p>
                @if($vendor->portfolio_links)
                <p><strong>Portfolio:</strong> {{ $vendor->portfolio_links }}</p>
                @endif
                <p><strong>Registered:</strong> {{ $vendor->created_at->format('d M Y, h:i A') }}</p>
            </div>
            
            <p>Our team will review your application and contact you within 2-3 business days with next steps.</p>
            
            <p>Thank you for choosing PicQ!</p>
            
            <p>Best regards,<br>The PicQ Team</p>
        </div>
        
        <div class="footer">
            <p>This is an automated email. Please do not reply to this message.</p>
            <p>&copy; {{ date('Y') }} PicQ. All rights reserved.</p>
        </div>
    </div>
</body>
</html>