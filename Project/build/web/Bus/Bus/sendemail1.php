<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['number'];
$from = $_POST['from_area'];
$to = $_POST['to_area'];
$comment = $_POST['msg'];


echo "<h1>Sent Sucessfully! Thankyou ".$name.", We will contact you shortly!</h1>";
echo "<a href='../index.html'>Back On Home</a>";
	
$formcontent=" From: $name \n email: $email\n Phone: $phone \n From Area: $from \n To Area: $to \n Message: $comment";
$recipient = "contact@ujjawalpackersmovers.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
if (!isset($error['contactName']) || !isset($error['contactEmail']) || !isset($error['contactMessage'])) { 

      ini_set("sendmail_from", $recipient); // for windows server
if(mail($recipient, $subject, $formcontent, $mailheader) or die("Error!"))
{   }

     
		
	} # end if - no validation error

	?>

<html>
<body>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 851297402;
var google_conversion_language = "en";
var google_conversion_format = "2";
var google_conversion_color = "ffffff";
var google_conversion_label = "u8MoCPeP2nIQ-oj3lQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/851297402/?label=u8MoCPeP2nIQ-oj3lQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>
