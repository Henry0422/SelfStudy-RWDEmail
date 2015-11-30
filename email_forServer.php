<?php
$to = "sample@example.com";
$subject = "Test for Responsive HTML Email Template";

$message = <<<EOF
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>A Simple Responsive HTML Email</title>
</head>

<body yahoo bgcolor="#f6f8f1" style="margin: 0;padding: 0;min-width: 100%!important;">
<table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0">
<tr>
  <td>
    <!--[if (gte mso 9)|(IE)]>
      <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td>
    <![endif]-->     
    <table bgcolor="#ffffff" class="content" align="center" cellpadding="0" cellspacing="0" border="0" style="width: 100%;max-width: 600px;">
      <tr>
        <td bgcolor="#DBEAF7" class="header" style="padding: 40px 30px 20px 30px;">
          <table width="70" align="left" border="0" cellpadding="0" cellspacing="0">  
            <tr>
              <td height="70" style="padding: 0 20px 20px 0;">
                <a href="#">
                    <img class="fix" src="images/logo.png" width="200" height="106.5" border="0" alt="Telecom Inc." style="display: block;border: none;">
                </a>
              </td>
            </tr>
          </table>
<!--          [if (gte mso 9)|(IE)]>
            <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]
          <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 425px;">  
            <tr>
              <td height="70">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="subhead" style="padding: 0 0 0 3px;">
                      CREATING
                    </td>
                  </tr>
                  <tr>
                    <td class="h1" style="padding: 5px 0 0 0;">
                      Responsive Email Magic
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          [if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td class="innerpadding borderbottom" style="padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="h2" style="color: #153643;font-family: sans-serif;padding: 0 0 15px 0;font-size: 24px;line-height: 28px;font-weight: bold;">
                Welcome to myAccount! Thank you for registering.
              </td>
            </tr>
            <tr>
              <td class="bodycopy" style="color: #153643;font-family: sans-serif;font-size: 16px;line-height: 22px;">
                 With myAccount, you can easily manage your account online:
                 <ul>
                     <li>View and pay your Telecom bills with eBill</li>
                     <li>Update your plan or features</li>
                     <li>View your services and check data usage</li>
                     <li>Manage your service passwords</li>
                     <li>And more!</li>
                 </ul>
              </td>
            </tr>
            <tr>
                <td style="padding: 10px 0 0 0;" align="center">
                  <table class="buttonwrapper" bgcolor="#0067C6" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td class="button" height="45" style="text-align: center;font-size: 18px;font-family: sans-serif;font-weight: bold;padding: 0 30px 0 30px;">
                          <a href="#" style="color: #ffffff;text-decoration: none;">
                              <span style="color:#ffffff; text-decoration:none;">myAccount Login</span>
                          </a>
                      </td>
                    </tr>
                  </table>
                </td>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td class="innerpadding borderbottom" style="padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;">
          <table width="115" align="left" border="0" cellpadding="0" cellspacing="0">  
            <tr>
              <td height="115" style="padding: 0 20px 20px 0;">
                <img class="fix" src="images/icon175x175.png" width="80" height="80" border="0" alt="Telecom App" style="display: block;border: none;">
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
            <table width="380" align="left" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td>
          <![endif]-->
          <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 380px;">  
            <tr>
              <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="h2" style="color: #153643;font-family: sans-serif;padding: 0 0 15px 0;font-size: 24px;line-height: 28px;font-weight: bold;">
                      Telecom app
                    </td>
                  </tr>
                  <tr>
                    <td class="bodycopy" style="color: #153643;font-family: sans-serif;font-size: 16px;line-height: 22px;">
                        If you are a Telecom wireless customer, make sure to download the FREE Telecom app from the Google Play or iTunes App store. The Telecom app lets you view and manage your Telecom wireless services right on your phone. 
                        Easily check your data and text messaging usage, view your Telecom wireless account information, make account changes, pay your eBill, find Telecom Select Wi-Fi hotspots, and more!
                        See <a href="#" style="text-decoration:none"><font color="#0072C6">Installing the Telecom app.</font> </a>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <!--[if (gte mso 9)|(IE)]>
                </td>
              </tr>
          </table>
          <![endif]-->
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="center" style="padding: 20px 0 0 0;">
                  <table border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="135" style="text-align: center; padding: 0 10px 0 10px;">
                        <a href="#">
                          <img src="images/apple_app_store_135x40_en_US_v1.png" width="135" height="40" alt="Telecom iOS app" border="0" style="display: block;border: none;">
                        </a>
                      </td>
                      <td width="135" style="text-align: center; padding: 0 10px 0 10px;">
                        <a href="#">
                          <img src="images/googleplay_badge_135x40_en_US_v2.png" width="124" height="40" alt="Telecom Android app" border="0" style="display: block;border: none;">
                        </a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td class="innerpadding borderbottom" style="padding: 30px 30px 30px 30px;border-bottom: 1px solid #f2eeed;">
          <img class="fix" src="images/wide.png" width="100%" border="0" alt="" style="display: block;border: none;">
        </td>
      </tr>
      <tr>
        <td class="innerpadding bodycopy" style="padding: 30px 30px 30px 30px;color: #153643;font-family: sans-serif;font-size: 16px;line-height: 22px;">
            Thank you for choosing Telecom product. <br><br>

            For information on getting started with and using myAccount, check out the
            <a href="#" style="text-decoration:none"><font color="#0072C6">Telecom support hub</font>.</a><br><br>

            <font size="2">
            If you have any comments, suggestions or concerns regarding this e-mail, please  <a href="#" style="text-decoration:none"><font color="#0072C6">contact us</font> </a>.  We look forward to hearing from you.  Please do not reply to this email, as you will not receive a response. We respect your online time & <a href="#" style="text-decoration:none"><font color="#0072C6">privacy</font></a>. 
            <br><br>
            NOTICE:  This confidential e-mail message is only for the intended recipient(s). If you are not the intended recipient, be advised that disclosing, copying, distributing, or any other use of this message, is strictly prohibited. In such case, please destroy this message and notify the sender.
            </font>
        </td>
      </tr>
      <tr>
        <td class="footer" bgcolor="#333" style="padding: 20px 30px 15px 30px;">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td align="center" class="footercopy" style="font-family: sans-serif;font-size: 14px;color: #ffffff;">
                 © 
                <script language="JavaScript" type="text/javascript">
                    now = new Date
                    theYear=now.getYear()
                    if (theYear < 1900)
                    theYear=theYear+1900
                    document.write(theYear)
                </script>
                  Telecom and its licensors. All rights reserved.<br>
<!--                <a href="#" class="unsubscribe"><font color="#ffffff">Unsubscribe</font></a> 
                <span class="hide">from this newsletter instantly</span>-->
              </td>
            </tr>
            <tr>
              <td align="center" style="padding: 20px 0 0 0;">
                <table border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                      <a href="#">
                        <img src="images/facebook.png" width="37" height="37" alt="Facebook" border="0" style="display: block;border: none;">
                      </a>
                    </td>
                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                      <a href="#">
                        <img src="images/twitter.png" width="37" height="37" alt="Twitter" border="0" style="display: block;border: none;">
                      </a>
                    </td>
                    <td width="37" style="text-align: center; padding: 0 10px 0 10px;">
                      <a href="#">
                        <img src="images/linkedin.png" width="37" height="37" alt="Linkedin" border="0" style="display: block;border: none;">
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
    <!--[if (gte mso 9)|(IE)]>
          </td>
        </tr>
    </table>
    <![endif]-->
    </td>
  </tr>
</table>
</body>
</html>
EOF;

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <donotreply@example.com>' . "\r\n";
// $headers .= 'Cc: myboss@example.com' . "\r\n";

if(	mail($to,$subject,$message,$headers)	){
	echo "Email sent successfully";
}else{
	echo "Email cannot be sent";
}

?>
