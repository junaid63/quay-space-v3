<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Granny Annexe | Professional Email</title>
    <style>
        /* Reset and Base Styles */
        body, table, td, a {
            font-family: 'Arial', 'Helvetica Neue', Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            border: 0;
            line-height: 1.6;
        }
        body {
            background-color: #f8f9fa;
            color: #333333;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        img {
            display: block;
            max-width: 100%;
            height: auto;
        }
        
        /* Main Container */
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
        
        /* Header Section */
        .header {
            /* background: linear-gradient(135deg, #0495f3 0%, #8a6454 100%); */
            background: linear-gradient(45deg, #F14245, #0495f3);
            padding: 10px 20px;
            text-align: center;
            position: relative;
        }
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #000000;
            /* background: linear-gradient(90deg, #000000 0%, #0495f3 50%, #000000 100%); */
        }
        .logo {
            display: block;
            margin: 0 auto;
            max-width: 150px;
            height: auto;
        }
        
        /* Content Section */
        .content-wrapper {
            padding: 10px 40px;
            background-color: #ffffff;
        }
        .content-card {
            background: #ffffff;
            border-radius: 8px;
            padding: 0;
        }
        
        /* Message Style for User */
        .message {
            color: #555555;
            font-size: 16px;
            line-height: 1.7;
        }
        .message p {
            margin-bottom: 20px;
        }
        .message b {
            color: #0495f3;
            font-weight: 600;
        }
        .message-signature {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
            color: #f14246;
            font-size: 15px;
        }
        
        /* Admin Contact Details */
        .details-section {
            margin-top: 10px;
        }
        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #0495f3;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
            letter-spacing: 0.5px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f5f5f5;
        }
        .detail-row:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        .label {
            flex: 0 0 120px;
            font-weight: 600;
            color: #555555;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .label.name {
            text-transform: capitalize;
        }
        .value {
            flex: 1;
            color: #000000;
            font-size: 15px;
            font-weight: 500;
            margin-left: 10px;
        }
        .value-message {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 6px;
            border-left: 3px solid #0495f3;
            margin-top: 5px;
            font-style: italic;
        }
        
        /* Footer */
        .footer {
            background-color: #1a1a1a;
            padding: 10px 20px;
            text-align: center;
            border-top: 4px solid #0495f3;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
            font-size: 15px;
            transition: color 0.3s ease;
        }
        .footer a:hover {
            color: #ffffff;
            text-decoration: underline;
        }
        .website-link {
            display: inline-block;
            background-color: #0495f3;
            color: white;
            padding: 10px 24px;
            border-radius: 4px;
            font-weight: 600;
            text-decoration: none;
            margin: 15px 0;
            transition: background-color 0.3s ease;
        }
        .website-link:hover {
            background-color: #f14246;
            text-decoration: none;
        }
        .copyright {
            color: #aaaaaa;
            font-size: 13px;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #333333;
        }
        
        /* Responsive Design */
        @media screen and (max-width: 510px) {
            .container {
                margin: 10px;
                border-radius: 8px;
            }
            .content-wrapper {
                padding: 25px;
            }
            .header {
                padding: 25px 15px;
            }
            .logo {
                max-width: 180px;
            }
            .detail-row {
                flex-direction: column;
            }
            .label {
                flex: none;
                margin-bottom: 5px;
                font-size: 13px;
            }
            .value {
                flex: none;
                margin-left: 5px;
            }
            .footer {
                padding: 25px 15px;
            }
        }
        @media screen and (max-width: 820px) {
            .value {
                margin-left: 5px;
            }
        }
        
        @media screen and (max-width: 480px) {
            .content-wrapper {
                padding: 20px;
            }
            .header {
                padding: 20px 10px;
            }
            .message {
                font-size: 15px;
            }
            .section-title {
                font-size: 18px;
            }
        }
        
        /* Subtle animations for email clients that support them */
        @media (prefers-reduced-motion: no-preference) {
            .website-link {
                transition: all 0.3s ease;
            }
        }
    </style>
</head>
<body>
    <table class="container" align="center" cellpadding="0" cellspacing="0">
        <!-- Header with Logo -->
        <tr>
            <td class="header">
                <img src="https://test-v3.quay-space.co.uk/storage/settings\September2025\RjKGKdRFBkhr2fsiQ1uG.png" alt="QUay Space Logo" class="logo" />
            </td>
        </tr>
        
        <!-- Content Section -->
        <tr>
            <td class="content-wrapper">
                <div class="content-card">
                    @if($type == "contactuser")
                        <div class="message">
                            <p>Dear <b>{{ $ConctactInfo->name }}</b>,</p>
                            <p>Thank you for reaching out to The Granny Annexe Company. We have received your inquiry and will be in touch with you shortly.</p>
                            <p>Our team is reviewing your message and one of our annexe specialists will contact you within 24 hours to discuss your project requirements in more detail.</p>
                            
                            <div class="message-signature">
                                <p>Kind regards,<br>
                                    <strong>Quay Space.</strong>
                                </p>
                            </div>
                        </div>
                    @elseif($type == "admin")
                        <h2 class="section-title">New Contact Form Submission</h2>
                        <div class="details-section">
                            <div class="detail-row">
                                <span class="label name">Name:</span>
                                <span class="value">{{ $ConctactInfo->name }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Email:</span>
                                <span class="value">{{ $ConctactInfo->email }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Phone:</span>
                                <span class="value">{{ $ConctactInfo->phone }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Service:</span>
                                <span class="value">{{ $ConctactInfo->selected_service }}</span>
                            </div>
                            <div class="detail-row">
                                <span class="label">Message:</span>
                                <div class="value">
                                    <div class="value-message">{{ $ConctactInfo->message }}</div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </td>
        </tr>
        
        <!-- Footer -->
        <tr>
            <td class="footer">
                <div class="footer-links">
                    <a href="{{ env('APP_URL') }}" class="website-link">Visit Our Website</a>
                </div>
                
                <div class="copyright">
                    <p>© 2026 {{ env('APP_NAME') }}  All rights reserved.</p>
                    <p style="font-size: 12px; margin-top: 5px; color: #888;">Designed by <a href="https://www.ssftech.co.uk/">SSF Tech</a> - Under the Provision of SSF Group</p>
                </div>
            </td>
        </tr>
    </table>
</body>
</html>