    <?php
//we need to get our variables first

    $email_to =   'graphs@mail.ru'; //the address to which the email will be sent
    $subject  =   $_GET['subject'];
    $message  =   $_GET['message'];
    $name = $_GET['Full_name'];
	$email = $_GET['email'];


    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know
     who are we replying to. */
    
    if(mail($email_to, $subject, $message, $name, $email)){
        readfile('index.html'); // we are sending this text to the ajax request telling it that the mail is sent..
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent
    }
    ?>