<?php
include("./header.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .contact-container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .contact-header {
            background-color: #6a1b9a; /* Purple color */
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        .contact-body {
            padding: 20px;
        }

        .contact-body p {
            margin: 10px 0;
            font-size: 16px;
        }

        .contact-body a {
            color: #6a1b9a; /* Purple color for links */
            text-decoration: none;
            font-weight: bold;
        }

        .contact-body a:hover {
            text-decoration: underline;
        }

        .contact-icon {
            margin-right: 10px;
            vertical-align: middle;
        }

        .contact-footer {
            text-align: center;
            font-size: 14px;
            color: #666;
            padding: 10px;
            background-color: #f4f4f4;
        }

        .icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .icon img {
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="contact-container">
        <div class="contact-header">
            Contact Us
        </div>
        <div class="contact-body">
            <p>
                <span class="icon">
                    <img src="https://img.icons8.com/ios-filled/50/6a1b9a/marker.png" alt="Location">
                </span>
                Near Sultanpur,Sector-128,Noida,GB Nagar 200302
            </p>
            <p>
                <span class="icon">
                    <img src="https://img.icons8.com/ios-filled/50/6a1b9a/phone.png" alt="Phone">
                </span>
                123-456-7890
            </p>
            <p>
                <span class="icon">
                    <img src="https://img.icons8.com/ios-filled/50/6a1b9a/email.png" alt="Email">
                </span>
                <a href="mailto:hello@reallygreatsite.com">hello@njit.com</a>
            </p>
            <p>
                <span class="icon">
                    <img src="https://img.icons8.com/ios-filled/50/6a1b9a/internet.png" alt="Website">
                </span>
                <a href="http://www.reallygreatsite.com" target="_blank">www.njitorg.com</a>
            </p>
        </div>
    </div>
</body>

</html>
