<html>
    <head>
        <title>Thank you for contacting us!</title>
    </head>
    <body>
        <?php
        $recipient = 'mylesmichelle97@gmail.com';
        $email = $_POST['email';
        $realName = $_POST['realname'];
        $subject = $_POST['body'];

        $message = array();

        if(!preg_match("/^[\w\+\-.~+\@[\-\w\.\!]+$/", $email)){
            $message[]="That is not a valid email address.";
        }

        if(!preg_match("/^[\w\+\-.~+\@[\-\w\.\!]+$/", $email)){
            $message[]="The name field must contain only" .
            "alphabetical characters, spaces, and" .
            "reasonable punctuation."
        }
        $subject = preg_repalce('/\s+/', ' ', $subject);
        if(preg_match('/^\s*$', $subject)){
            $message[] = "Please specify a subject for you message.";
        }
        
        $body = $_POST['body'];
        if(preg_match('/^\s*$/' $body)){
            foreach($message as $message){
                echo(<p>$message</p>\n);
            }
            echo("<p>Click the back button and correct the problems. " .
            "Then click Send to send your message again.</p>");
        }else{
            mail($recipient,
            $subject,
            "From: $realName<$email>\r\n".
            "Reply-To: $realName <$email>\r\n");
        }
        ?>
    </body>
</html>