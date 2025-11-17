@if ($bookingData['email'] === $mail )
//client
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .content {
            padding: 30px;
        }

        .booking-details {
            background: #f8f9fa;
            border-left: 4px solid #667eea;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
        }

        .detail-row {
            display: flex;
            padding: 10px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: bold;
            color: #667eea;
            width: 180px;
        }

        .detail-value {
            color: #333;
        }

        .highlight {
            background: #fff3cd;
            padding: 15px;
            border-radius: 4px;
            margin: 20px 0;
            border-left: 4px solid #ffc107;
        }

        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #6c757d;
        }

        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #667eea;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>🌍 Thank You!</h1>
            <p style="margin: 5px 0 0 0; font-size: 16px;">Your booking request has been received</p>
        </div>

        <div class="content">
            <p>Dear <strong>{{ $bookingData['full_name'] }}</strong>,</p>

            <p>Thank you for choosing us for your travel plans! We have received your booking request and are excited to help you plan an amazing trip.</p>

            <div class="booking-details">
                <h3 style="margin-top: 0; color: #667eea;">Your Booking Details</h3>

                <div class="detail-row">
                    <div class="detail-label">Destination:</div>
                    <div class="detail-value">{{ $bookingData['destination'] }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Travel Dates:</div>
                    <div class="detail-value">
                        {{ date('M d, Y', strtotime($bookingData['travel_from'])) }} -
                        {{ date('M d, Y', strtotime($bookingData['travel_to'])) }}
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Number of Travelers:</div>
                    <div class="detail-value">{{ $bookingData['travelers'] }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">Travel Type:</div>
                    <div class="detail-value">{{ $bookingData['travel_type'] }}</div>
                </div>
            </div>

            <div class="highlight">
                <strong>📝 What Happens Next?</strong>
                <ul style="margin: 10px 0 0 20px;">
                    <li>Our travel expert will review your request within 24 hours</li>
                    <li>We'll prepare a customized quote tailored to your needs</li>
                    <li>You'll receive a detailed itinerary and pricing</li>
                    <li>We may contact you for any additional preferences</li>
                </ul>
            </div>

            <p>If you have any questions or need to make changes, please don't hesitate to contact us.</p>

            <p><strong>Contact Us:</strong><br>
                📧 Email: support@yourtravelagency.com<br>
                📞 Phone: +91-XXXXXXXXXX<br>
                🕐 Hours: Mon-Sat, 9 AM - 6 PM IST</p>

            <center>
                <a href="{{ route('home') }}" class="btn">Visit Our Website</a>
            </center>
        </div>

        <div class="footer">
            <p><strong>Your Travel Agency</strong></p>
            <p>Making your travel dreams come true</p>
            <p style="margin-top: 15px; font-size: 12px;">
                &copy; {{ date('Y') }} Your Travel Agency. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>

@else
// admin
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Booking Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 650px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
            color: #ffffff;
            padding: 25px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 26px;
        }

        .alert-badge {
            background: #ff6b6b;
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            display: inline-block;
            font-size: 12px;
            margin-top: 10px;
            font-weight: bold;
        }

        .content {
            padding: 30px;
        }

        .info-box {
            background: #e7f3ff;
            border-left: 4px solid #2196F3;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
        }

        .customer-details {
            background: #f8f9fa;
            border: 2px solid #dee2e6;
            padding: 20px;
            margin: 20px 0;
            border-radius: 6px;
        }

        .detail-row {
            display: flex;
            padding: 12px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-label {
            font-weight: bold;
            color: #495057;
            width: 200px;
            flex-shrink: 0;
        }

        .detail-value {
            color: #212529;
            font-weight: 600;
        }

        .action-section {
            background: #fff3cd;
            padding: 20px;
            border-radius: 4px;
            margin: 25px 0;
            border-left: 4px solid #ffc107;
        }

        .footer {
            background: #343a40;
            padding: 20px;
            text-align: center;
            color: #ffffff;
            font-size: 13px;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 5px;
            font-weight: bold;
        }

        .btn-danger {
            background: #dc3545;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>🔔 New Booking Request</h1>
            <span class="alert-badge">ACTION REQUIRED</span>
        </div>

        <div class="content">
            <div class="info-box">
                <strong>⚡ New booking request received on {{ date('M d, Y \a\t h:i A') }}</strong>
                <p style="margin: 10px 0 0 0;">A customer has submitted a travel booking request. Please review and respond within 24 hours.</p>
            </div>

            <h3 style="color: #dc3545; margin-top: 25px;">Customer Information</h3>
            <div class="customer-details">
                <div class="detail-row">
                    <div class="detail-label">👤 Full Name:</div>
                    <div class="detail-value">{{ $bookingData['full_name'] }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">📧 Email Address:</div>
                    <div class="detail-value">
                        <a href="mailto:{{ $bookingData['email'] }}">{{ $bookingData['email'] }}</a>
                    </div>
                </div>

                @if(!empty($bookingData['phone']))
                <div class="detail-row">
                    <div class="detail-label">📞 Phone Number:</div>
                    <div class="detail-value">
                        <a href="tel:{{ $bookingData['phone'] }}">{{ $bookingData['phone'] }}</a>
                    </div>
                </div>
                @endif
            </div>

            <h3 style="color: #dc3545; margin-top: 25px;">Booking Details</h3>
            <div class="customer-details">
                <div class="detail-row">
                    <div class="detail-label">🌍 Destination:</div>
                    <div class="detail-value">{{ $bookingData['destination'] }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">📅 Travel From:</div>
                    <div class="detail-value">{{ date('l, M d, Y', strtotime($bookingData['travel_from'])) }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">📅 Travel To:</div>
                    <div class="detail-value">{{ date('l, M d, Y', strtotime($bookingData['travel_to'])) }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">🕐 Duration:</div>
                    <div class="detail-value">
                        {{ \Carbon\Carbon::parse($bookingData['travel_from'])->diffInDays($bookingData['travel_to']) }} days
                    </div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">👥 Number of Travelers:</div>
                    <div class="detail-value">{{ $bookingData['travelers'] }}</div>
                </div>

                <div class="detail-row">
                    <div class="detail-label">✈️ Travel Type:</div>
                    <div class="detail-value">{{ $bookingData['travel_type'] }}</div>
                </div>
            </div>

            <div class="action-section">
                <strong>⚠️ Required Actions:</strong>
                <ul style="margin: 10px 0 0 20px;">
                    <li>Review customer requirements and preferences</li>
                    <li>Prepare customized travel package and quote</li>
                    <li>Contact customer within 24 hours</li>
                    <li>Send detailed itinerary and pricing</li>
                    <li>Follow up if needed</li>
                </ul>
            </div>

            <center>
                <a href="mailto:{{ $bookingData['email'] }}" class="btn">Reply to Customer</a>
                <a href="tel:{{ $bookingData['phone'] ?? '' }}" class="btn btn-danger">Call Customer</a>
            </center>

            <p style="margin-top: 30px; font-size: 13px; color: #6c757d;">
                <strong>Note:</strong> This is an automated notification. Customer has received a confirmation email with their booking details.
            </p>
        </div>

        <div class="footer">
            <p><strong>Travel Agency Admin Panel</strong></p>
            <p>Booking Management System</p>
            <p style="margin-top: 10px; font-size: 11px;">
                Received: {{ date('Y-m-d H:i:s') }} IST
            </p>
        </div>
    </div>
</body>

</html>

@endif