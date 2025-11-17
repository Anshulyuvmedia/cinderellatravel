<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry Notification</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 20px auto;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .email-header {
            background: linear-gradient(135deg, #0F76BD 0%, #1a8cca 100%);
            padding: 40px 20px;
            text-align: center;
            color: white;
        }

        .email-header h1 {
            font-size: 28px;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .email-header p {
            font-size: 14px;
            opacity: 0.9;
            letter-spacing: 0.5px;
        }

        .email-body {
            padding: 40px 30px;
        }

        .greeting {
            font-size: 16px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .greeting strong {
            color: #0F76BD;
        }

        .info-section {
            background-color: #f9f9f9;
            border-left: 4px solid #0F76BD;
            padding: 16px 20px;
            margin: 24px 0;
            border-radius: 4px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .info-row:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 600;
            color: #0F76BD;
            min-width: 120px;
        }

        .info-value {
            color: #555;
            flex: 1;
            text-align: right;
            word-break: break-word;
        }

        .section-title {
            font-size: 16px;
            font-weight: 700;
            color: #0F76BD;
            margin: 24px 0 12px 0;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .message-box {
            background-color: #f0f4f8;
            padding: 16px;
            border-radius: 6px;
            color: #555;
            line-height: 1.7;
            white-space: pre-wrap;
            word-wrap: break-word;
            font-size: 14px;
        }

        .action-buttons {
            margin: 30px 0;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 12px 28px;
            margin: 0 10px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background-color: #0F76BD;
            color: white;
        }

        .btn-primary:hover {
            background-color: #0a5a95;
            box-shadow: 0 4px 12px rgba(15, 118, 189, 0.3);
        }

        .btn-secondary {
            background-color: #e8e8e8;
            color: #333;
            border: 1px solid #ccc;
        }

        .btn-secondary:hover {
            background-color: #d5d5d5;
        }

        .email-footer {
            background-color: #f9f9f9;
            padding: 24px 30px;
            border-top: 1px solid #eee;
            text-align: center;
            font-size: 12px;
            color: #888;
        }

        .footer-links {
            margin: 12px 0;
        }

        .footer-links a {
            color: #0F76BD;
            text-decoration: none;
            margin: 0 12px;
            font-size: 12px;
        }

        .footer-links a:hover {
            text-decoration: underline;
        }

        .divider {
            height: 1px;
            background-color: #eee;
            margin: 20px 0;
        }

        .highlight {
            background-color: #fff3cd;
            padding: 2px 6px;
            border-radius: 3px;
            color: #856404;
            font-weight: 500;
        }

        @media (max-width: 480px) {
            .email-body {
                padding: 20px 15px;
            }

            .email-header {
                padding: 30px 15px;
            }

            .email-header h1 {
                font-size: 24px;
            }

            .info-row {
                flex-direction: column;
            }

            .info-label {
                margin-bottom: 6px;
            }

            .info-value {
                text-align: left;
            }

            .btn {
                display: block;
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>✉️ New Enquiry Received</h1>
            <p>Lamaira Travel & Tourism</p>
        </div>

        <!-- Body -->
        <div class="email-body">
            <!-- Greeting -->
            <div class="greeting">
                Hello <strong>{{ strpos($data['email'] ?? '', 'deepaknogia') !== false || strpos($data['email'] ?? '', 'devendrayuvmedia') !== false ? 'Admin' : ucfirst(explode(' ', $data['name'] ?? 'Traveler')[0]) }}</strong>,
            </div>

            @if (strpos($data['email'] ?? '', 'deepaknogia') === false && strpos($data['email'] ?? '', 'devendrayuvmedia') === false)
            <p style="color: #666; margin-bottom: 20px;">
                Thank you for submitting your enquiry! We have received your request and our team will review it shortly. We will contact you soon with more information.
            </p>
            @else
            <p style="color: #666; margin-bottom: 20px;">
                A new enquiry has been submitted on your website. Please review the details below and respond accordingly.
            </p>
            @endif

            <!-- Customer Information -->
            <div class="section-title">📋 Customer Information</div>
            <div class="info-section">
                @if ($data['name'] ?? null)
                <div class="info-row">
                    <span class="info-label">Name:</span>
                    <span class="info-value">{{ $data['name'] }}</span>
                </div>
                @endif

                @if ($data['email3'] ?? null)
                <div class="info-row">
                    <span class="info-label">Email:</span>
                    <span class="info-value"><a href="mailto:{{ $data['email3'] }}"
                            style="color: #0F76BD; text-decoration: none;">{{ $data['email3'] }}</a></span>
                </div>
                @endif



                @if ($data['subject'] ?? null)
                <div class="info-row">
                    <span class="info-label">Srevice:</span>
                    <span class="info-value">{{ $data['subject'] }}</span>
                </div>
                @endif




            </div>

            <!-- Message -->
            @if ($data['message'] ?? null)
            <div class="section-title">💬 Message</div>
            <div class="message-box">{{ $data['message'] }}</div>
            @endif


            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="mailto:{{ $data['email'] ?? '#' }}" class="btn btn-primary">Reply to Enquiry</a>
             
            </div>

            <div class="divider"></div>

     
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p style="margin-bottom: 12px;">
                <strong>Cinderella Travel & Tourism</strong>
            </p>
            <div class="footer-links">
                <a href="{{ config('app.url') }}">Website</a>
                <a href="{{ config('app.url') }}/about">About Us</a>
                <a href="{{ config('app.url') }}/contact">Contact</a>
            </div>
            <p style="margin-top: 12px; border-top: 1px solid #ddd; padding-top: 12px;">
                © {{ date('Y') }} Lamaira Travel & Tourism. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>