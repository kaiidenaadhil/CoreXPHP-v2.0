<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>New Contact Submission</title>
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
    font-size: 24px; color: #005a87; margin-bottom: 20px; font-weight: 600;
  }
  p {
    font-size: 16px; line-height: 1.6em; margin-bottom: 12px;
  }
  strong {
    color: #000;
  }
  .info-box {
    background: #f8fbfd;
    border: 1px solid #e2e6ea;
    border-radius: 6px;
    padding: 12px;
    margin-bottom: 12px;
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
        <h1>New Contact Form Submission</h1>
        
        <div class="info-box">
          <p><strong>Name:</strong> <?=$fullName?></p>
          <p><strong>Email:</strong> <?=$email?></p>
          <p><strong>Phone:</strong> <?=$phone?></p>
          <p><strong>Source:</strong> <?=$source?></p>
        </div>

        <p><strong>Subject:</strong> <?=$subject?></p>
        <p><strong>Message:</strong><br /><?=nl2br(htmlspecialchars($message))?></p>
        
        <p style="margin-top:20px;"><strong>IP Address:</strong> <?=$ip?></p>
      </td>
    </tr>
    <tr>
      <td class="footer">
        &copy; <?=date('Y')?> Avant Vista Ventures. All rights reserved.
      </td>
    </tr>
  </table>
</body>
</html>
