<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            padding: 20px;
        }
        .content {
            text-align: left;
        }
        .header img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .details {
            margin-top: 20px;
        }
        .details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="/email_received.svg" alt="Logo" width="30%" height="auto">
        </div>
        <div class="content">
            <h2>Contact Details</h2>
            <div class="details">
                <p><strong  style="margin-right: 40px">Nama</strong> : <span>{{ $details['name'] ?? 'Restu Satya' }}</span></p>
                <p><strong  style="margin-right: 35px">Email</strong> : <span>{{ $details['email'] ?? '081121212' }}</span></p>
                <p><strong style="margin-right: 17px">Message</strong> : </p>
                <p style="margin-top: 10px;">
                    <i>" {{ $details['message'] ?? 'Just Message' }} "</i>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
