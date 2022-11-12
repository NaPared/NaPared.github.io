<?php

    if(isset($_POST['submit'])){
        $sendername = $_POST['name'];
        $senderemail = $_POST['email'];
        $subjectheader = $_POST['subject'];
        $sendermessage = $_POST['message'];

        $mailto = "nathandevelops1@gmail.com";
        $sentfrom = "From: ".$senderemail;
        $txt = "You have received an email from ".$sendername.".\n\n".$sendermessage;

        mail($mailto, $subjectheader, $txt, $sentfrom);
        header("Location: contact.html?mailsend");
    }
?>