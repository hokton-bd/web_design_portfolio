<?php 
    function sendMailToMe() {
        $name = $_POST['name'];
        $headers = $_POST['email'];
        $message = $_POST['message'];
        $to = 'big-dipper@big-dipper.work';
        // $to = 'skmhkt.p@gamil.com';
        $subject = $name.'様からお仕事の依頼です';
        $headers = 'From: '.$headers;
        
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        if(mb_send_mail($to, $subject, $message, $headers) == true) {
            echo "<script>window.location = 'thanks.php'</script>";
        } else {
            echo 'error';
        }

    };
    
    if(isset($_POST['header-submit'])) {
        sendMailToMe();

    } else if(isset($_POST['footer-submit'])) {
        sendMailToMe();
    }

; ?>