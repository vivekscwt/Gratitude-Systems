<?php

if(isset($_REQUEST['submit_mail']))
{
  $to = "xxxx@xxxx.com";
  $name = $_REQUEST['username'];
  $email = $_REQUEST['useremail'];
  $msg = $_REQUEST['usermsg'];

	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";
	$headers .= "From: SBD <yyyy@domain.in>\r\n";

	$subject= "Enter your subject here";

	$message= '

<div id="wrapper" dir="ltr" style="background-color: #f5f5f5; margin: 0; padding: 70px 0 70px 0; -webkit-text-size-adjust: none !important; width: 100%;">
 <table height="100%" border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
   <tr>
    <td align="center" valign="top">
      <div id="template_header_image"><p style="margin-top: 0;"></p></div>
      <table id="template_container" style="box-shadow: 0 1px 4px rgba(0,0,0,0.1) !important; background-color: #fdfdfd; border: 1px solid #dcdcdc; border-radius: 3px !important;" border="0" cellpadding="0" cellspacing="0" width="600">
       <tbody>
         <tr>
          <td align="center" valign="top">
            <!-- Header -->
            <table id="template_header" style="background-color: #557da1; border-radius: 3px 3px 0 0 !important; color: #ffffff; border-bottom: 0; font-weight: bold; line-height: 100%; vertical-align: middle; font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif;" border="0" cellpadding="0" cellspacing="0" width="600">
              <tbody>
                <tr>
				 <td id="header_wrapper" style="padding: 36px 48px; display: block;">
                    <h1 style="color: #ffffff; font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 30px; font-weight: 300; line-height: 150%; margin: 0; text-align: left; text-shadow: 0 1px 0 #7797b4; -webkit-font-smoothing: antialiased;">Mail body heading</h1>
                 </td>
                </tr>
              </tbody>
            </table>
		  <!-- End Header -->
		  </td>
         </tr>
         <tr>
          <td align="center" valign="top">
            <!-- Body -->
            <table id="template_body" border="0" cellpadding="0" cellspacing="0" width="600">
              <tbody>
                <tr>
                 <td id="body_content" style="background-color: #fdfdfd;" valign="top">
                   <!-- Content -->
                   <table border="0" cellpadding="20" cellspacing="0" width="100%">
                    <tbody>
                     <tr>
                      <td style="padding: 48px;" valign="top">
                        <div id="body_content_inner" style="color: #737373; font-family: &quot;Helvetica Neue&quot;, Helvetica, Roboto, Arial, sans-serif; font-size: 14px; line-height: 150%; text-align: left;">

                          <p style="margin: 0 0 16px;">Contact details:</p>
                          <table border="0" cellpadding="0" cellspacing="0" width="80%">
                           <tr>
                             <td>Name</td>
                             <td>'.$name.'</td>
                           </tr>
                           <tr>
                             <td>Email</td>
                             <td>'.$email.'</td>
                           </tr>
                           <tr>
                             <td>Message</td>
                             <td>'.$msg.'</td>
                           </tr>
                         </table>

                        </div>
                      </td>
                     </tr>
                    </tbody>
                   </table>
                 <!-- End Content -->
                 </td>
                </tr>
              </tbody>
            </table>
          <!-- End Body -->
          </td>
         </tr>
         <tr>
          <td align="center" valign="top">
            <!-- Footer -->
            <table id="template_footer" border="0" cellpadding="10" cellspacing="0" width="600">
             <tbody>
              <tr>
               <td style="padding: 0; -webkit-border-radius: 6px;" valign="top">
                <table border="0" cellpadding="10" cellspacing="0" width="100%">
                  <tbody>
                    <tr>
                     <td colspan="2" id="credit" style="padding: 0 48px 48px 48px; -webkit-border-radius: 6px; border: 0; color: #99b1c7; font-family: Arial; font-size: 12px; line-height: 125%; text-align: center;" valign="middle">
                            <p>Email sent from http://www.test.com/</p>
                     </td>
                    </tr>
                  </tbody>
                </table>
               </td>
              </tr>
             </tbody>
            </table>
          <!-- End Footer -->
          </td>
         </tr>
       </tbody>
      </table>
    </td>
   </tr>
  </tbody>
 </table>
</div>
    
';

	if(mail($to, $subject, $message, $headers))
  {
    ?>
    <script>
    alert('Successfully send your message.');
    window.location = window.location.href;
    </script><?php
  }
  else
  {
    ?>
    <script>alert('Mail send failed!');
    window.location = window.location.href;
    </script><?php
  }
}

?>

<form name="mail_send" action="" method="post">
<input type="text" required name="username">
<input type="email" required name="useremail">
<textarea name="usermsg" required></textarea>
<input type="submit" name="submit_mail" value="Send">
</form>