<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .badge {
            background-color: #FF2D20;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 12px;
            display: inline-block;
            margin-top: 10px;
        }

        .content {
            padding: 40px 30px;
        }

        .field {
            margin-bottom: 25px;
        }

        .label {
            font-weight: 600;
            color: #555;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 8px;
            display: block;
        }

        .value {
            color: #333;
            font-size: 16px;
            padding: 12px;
            background-color: #f8f9fa;
            border-left: 4px solid #FF2D20;
            border-radius: 4px;
        }

        .message-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            border-left: 4px solid #FF2D20;
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        .reply-button {
            display: inline-block;
            background-color: #FF2D20;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 50px;
            margin-top: 20px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>📬 New Contact Message</h1>
            <span class="badge">Portfolio Contact Form</span>
        </div>

        <div class="content">
            <div class="field">
                <span class="label">From</span>
                <div class="value">{{ $name }}</div>
            </div>

            <div class="field">
                <span class="label">Email Address</span>
                <div class="value">
                    <a href="mailto:{{ $email }}" style="color: #FF2D20; text-decoration: none;">
                        {{ $email }}
                    </a>
                </div>
            </div>

            <div class="field">
                <span class="label">Message</span>
                <div class="message-box">{{ $messageContent }}</div>
            </div>

            <div class="field">
                <span class="label">Received</span>
                <div class="value">{{ now()->format('F d, Y - h:i A') }}</div>
            </div>

            <div style="text-align: center;">
                <a href="mailto:{{ $email }}" class="reply-button">Reply to {{ $name }}</a>
            </div>
        </div>

        <div class="footer">
            <p>This message was sent from your portfolio contact form.</p>
            <p>Sent via Laravel 10 Portfolio</p>
        </div>
    </div>
</body>

</html>
