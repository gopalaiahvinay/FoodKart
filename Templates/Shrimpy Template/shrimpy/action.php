<?php
if(isset($_POST['sendContact'])){


		// ENTER YOUR EMAIL HERE
		 $to_email = "your_email@gmail.com";

        $hasError = 'false';
        if(trim($_POST['your_name']) == '') {
            $hasError = "true";
            echo '<div class="error">Please enter your name.</div>';
			exit;
            
        } else {
            $name = trim($_POST['your_name']);
        }
        
        if(trim($_POST['your_email']) == '')  {
            $hasError = "true";
            echo '<div class="error">Please enter your valid email address.</div>';
			exit;			
			
            
        } else if ( !filter_var( trim($_POST['your_email']) , FILTER_VALIDATE_EMAIL ) ) {
            $hasError = "true";
            echo '<div class="error">Please enter your valid email address.</div>';
			exit;			
            
        } else {
            $email = trim($_POST['your_email']);
        }
            
        if(trim($_POST['your_phone']) == '') {
            $hasError = "true";
            echo '<div class="error">Please enter your phone number.</div>';
            exit;           

        } else {            
            $phone = stripslashes(trim($_POST['your_phone']));
        }

        if(trim($_POST['your_subject']) == '') {
            $hasError = "true";
            echo '<div class="error">Please enter your subject.</div>';
            exit;           

        } else {            
            $subject = stripslashes(trim($_POST['your_subject']));
        }        

        if(trim($_POST['your_message']) == '') {
            $hasError = "true";
            echo '<div class="error">Please enter your message.</div>';
			exit;			

        } else {            
            $comment = stripslashes(trim($_POST['your_message']));
        }
     
        
        if($hasError!="true") {

            $e_date    = date( 'Y/m/d - h:i A', time() );
            $e_subject = 'New Message By ' . $name . ' on ' . $e_date . '';
            $e_body    = "$name has contacted you.\r\n\n";
            $e_body .= "Comment: $comment \r\n\n";
            $e_body .= "Email: $email \r\n\n";
            $e_body .= "Subject: $subject \r\n\n";
            $e_body .= "Phone: $phone \r\n\n";
            $msg = $e_body;

            mail( $to_email, $e_subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n" );

            echo "";            
            echo "<div class='contact-success bg-success'>";
            echo "<h3>Message Sent Successfully.</h3>";
            echo "<p>Thank you <strong>$name</strong>, your message has been submitted to us.</p>";
            echo "</div>";
            exit;
        }
}
?>