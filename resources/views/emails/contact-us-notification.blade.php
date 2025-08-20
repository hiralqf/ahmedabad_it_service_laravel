<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Contact Us Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #696cff;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }
        .form-data {
            background: white;
            padding: 15px;
            border-radius: 5px;
            margin: 15px 0;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .form-row:last-child {
            border-bottom: none;
        }
        .label {
            font-weight: bold;
            color: #696cff;
        }
        .value {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>New Contact Us Request</h1>
        <p>A new contact us request has been submitted through your website.</p>
    </div>
    
    <div class="content">
        <div class="form-data">
            <div class="form-row">
                <span class="label">Name:</span>
                <span class="value">{{ $formData['name'] }}</span>
            </div>
            
            <div class="form-row">
                <span class="label">Email:</span>
                <span class="value">{{ $formData['email'] }}</span>
            </div>
            
            <div class="form-row">
                <span class="label">Phone Number:</span>
                <span class="value">{{ $formData['phone'] }}</span>
            </div>
            
          
            @if(isset($formData['message']) && $formData['message'])
            <div class="form-row">
                <span class="label">Message:</span>
                <span class="value">{{ $formData['message'] }}</span>
            </div>
            @endif
            
         
            <div class="form-row">
                <span class="label">Submitted At:</span>
                <span class="value">{{ now()->format('F j, Y \a\t g:i A') }}</span>
            </div>
        </div>
        
        <p><strong>Please contact this person as soon as possible to discuss their requirements.</strong></p>
    </div>
    
    <div class="footer">
        <p>This email was sent from your website contact form.</p>
        <p>QueryFinder Solutions</p>
    </div>
</body>
</html> 