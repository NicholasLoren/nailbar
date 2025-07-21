<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #DCBBB3, #F2E2D9);
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .header h1 {
            color: #5A5A5A;
            margin: 0;
            font-size: 24px;
        }

        .content {
            background: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
        }

        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            border-radius: 0 0 10px 10px;
            border: 1px solid #e0e0e0;
            border-top: none;
        }

        .info-row {
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px solid #f0f0f0;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .label {
            font-weight: bold;
            color: #5A5A5A;
            display: inline-block;
            width: 140px;
        }

        .value {
            color: #666;
        }

        .message-box {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            border-left: 4px solid #DCBBB3;
        }

        .priority {
            background: #fff3cd;
            color: #856404;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 20px;
            border: 1px solid #ffeaa7;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>THE NAIL BAR UG</h1>
        <p style="margin: 5px 0 0 0; color: #5A5A5A;">New Contact Form Submission</p>
    </div>

    <div class="content">
        @if($contact->service && $contact->preferred_date)
            <div class="priority">
                <strong>🗓️ Appointment Request</strong> - This client has requested a specific service and date. Please
                respond promptly!
            </div>
        @endif

        <h2 style="color: #5A5A5A; margin-top: 0;">Contact Details</h2>

        <div class="info-row">
            <span class="label">Name:</span>
            <span class="value">{{ $contact->name }}</span>
        </div>

        <div class="info-row">
            <span class="label">Email:</span>
            <span class="value">{{ $contact->email }}</span>
        </div>

        @if($contact->phone)
            <div class="info-row">
                <span class="label">Phone:</span>
                <span class="value">{{ $contact->phone }}</span>
            </div>
        @endif

        @if($contact->service)
            <div class="info-row">
                <span class="label">Service:</span>
                <span class="value">{{ ucwords(str_replace('_', ' ', $contact->service)) }}</span>
            </div>
        @endif

        @if($contact->preferred_date)
            <div class="info-row">
                <span class="label">Preferred Date:</span>
                <span class="value">{{ $contact->preferred_date->format('l, F j, Y') }}</span>
            </div>
        @endif

        @if($contact->preferred_time)
            <div class="info-row">
                <span class="label">Preferred Time:</span>
                <span class="value">{{ date('g:i A', strtotime($contact->preferred_time)) }}</span>
            </div>
        @endif

        <div class="info-row">
            <span class="label">Submitted:</span>
            <span class="value">{{ $contact->created_at->format('M j, Y \a\t g:i A') }}</span>
        </div>

        <div class="message-box">
            <h3 style="margin-top: 0; color: #5A5A5A;">Message:</h3>
            <p style="margin: 0; white-space: pre-wrap;">{{ $contact->message }}</p>
        </div>
    </div>

    <div class="footer">
        <p style="margin: 0; color: #666; font-size: 14px;">
            This email was sent from the contact form on The Nail Bar UG website.<br>
            Please respond to the customer within 24 hours for the best service experience.
        </p>
        <div style="margin-top: 15px;">
            <strong style="color: #5A5A5A;">The Nail Bar UG</strong><br>
            <span style="color: #666; font-size: 14px;">
                The Cube, First Floor | Kampala, Uganda<br>
                +256 772 054 361 | info@thenailbarug.com
            </span>
        </div>
    </div>
</body>

</html>