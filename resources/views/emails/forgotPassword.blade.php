<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Laravel Base App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style type="text/css">
        
    </style>

    </head>
    <body style="margin: 0; padding: 0;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
        <td style="padding: 15px 0 20px 0;">

    <table border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #83c324;">
    <tr>
        <td align="center" bgcolor style="padding: 20px 0 15px 0;">
        
        </td>
    </tr>
    <tr>
        <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
            <td style="color: #153643; font-family: Arial, sans-serif;">
                <h1 style="font-size: 18px; margin: 0;">Hello {{ $details['first_name'] }} {{ $details['last_name'] }}, </h1>
            </td>
            </tr>
            <tr>
            <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                A Forgot Password Request was sent from your Account.

                <br><br>

                <p style="margin: 0; font-size: 16px;">Click <a href="http://127.0.0.1:3000/reset-password/{{ $details['token'] }}">Here</a> to reset your password</p>

                <br><br><br>

                <p style="font-size: 12px;">If this request was not sent by you, please Ignore this message.</p>
                
                </td>
            </tr>
            <tr>
            <td>
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                <tr>
                    <td width="260" valign="top">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                        <tr> </tr>
                        <tr>
                        <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;"><p style="margin: 0;">Regards, Laravel Base App</p></td>
                        </tr>
                    </table>
                    </td>
    </tr>
                </table>
            </td>
            </tr>
        </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#83c324" style="padding: 30px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
            <tr>
            <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;"><p style="margin: 0;">&reg; Laravel Base App<br />
            </p></td>
            <td align="right">
                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                <tr>
                    <td>
                    <a href="http://www.twitter.com/">
                        <!--<img src="https://assets.codepen.io/210284/tw.gif" alt="Twitter." width="38" height="38" style="display: block;" border="0" /> -->
                    </a>
                    </td>
                    <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                    <td>
                    <a href="http://www.twitter.com/">
                        <!--<img src="https://assets.codepen.io/210284/fb.gif" alt="Facebook." width="38" height="38" style="display: block;" border="0" /> -->
                    </a>
                    </td>
                </tr>
                </table>
            </td>
            </tr>
        </table>
        </td>
    </tr>
    </table>

        </td>
        </tr>
    </table>
    </body>
</html>