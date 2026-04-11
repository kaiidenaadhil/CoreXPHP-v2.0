<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Inquiry Received</title>
<style>
  body, html {
    margin: 0; padding: 0; font-family: Arial, sans-serif; background: #f7f7f7; color: #333;
  }
  .email-container {
    max-width: 600px; margin: 20px auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .header {
    background-color: #f0f0f0; padding: 25px; text-align: center;
  }
  .header img {
    max-width: 200px; height: auto;
  }
  .content {
    padding: 25px;
  }
  h1 {
    font-size: 22px; color: #005a87; margin-bottom: 15px; font-weight: 600;
  }
  p {
    font-size: 16px; line-height: 1.6em; margin-bottom: 15px;
  }
  .highlight {
    background: #eef8fc; padding: 8px 12px; border-radius: 4px; display: inline-block;
  }
  .signature {
    margin-top: 30px;
    font-weight: bold;
    color: #000;
  }
  .footer {
    background-color: #f0f0f0; text-align: center; font-size: 14px; color: #666; padding: 15px;
  }
  @media only screen and (max-width: 600px) {
    .email-container {
      width: 100% !important; margin: 10px auto;
    }
  }
</style>
</head>
<body>
  <table role="presentation" class="email-container" cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td class="header">
        <img src="https://avantvista.com/assets/alpha-theme/img/logo.png" alt="Avant Vista Ventures Logo" />
      </td>
    </tr>
    <tr>
      <td class="content">
        <h1>Dear <?=$fullName?>,</h1>
        <p>We sincerely appreciate you reaching out to <strong><?=$company?></strong>. Your inquiry has been successfully received and is currently under review by our team.</p>
        
        <p class="highlight"><strong>Subject:</strong> <?=$subject?></p>
        <p><strong>Your Message:</strong><br /><?=nl2br(htmlspecialchars($message))?></p>
        
        <p>Our dedicated support team will respond to you at the earliest possible time. We aim to ensure that every query receives a prompt and thorough response.</p>
        
        <p class="signature">Warm regards,<br />The <?=$company?> Team</p>
      </td>
    </tr>
    <tr>
      <td class="footer">
        &copy; <?=date('Y')?> <?=$company?>. All rights reserved.
      </td>
    </tr>
  </table>
</body>
</html>
