<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Отправка письма</title>
<meta http-equiv="Refresh" content="4; URL=http://beltravel.by/contacts.php"> 
</head>
<body>

<?php 
 
    $sendto   = "anzhelika110k@gmail.com";
    $username = $_POST['name'];
    $usermail = $_POST['email'];
    $usertel = $_POST['tel'];
    $usertext = $_POST['text']; 

    $subject  = "Путеводитель по Беларуси";
    $headers  = "From: " . strip_tags($usermail) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendto) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    
    $msg  = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта BelarusToday</h2>\r\n";
    $msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
    $msg .= "<p><strong>e-mail:</strong> ".$usermail."</p>\r\n";
    $msg .= "<p><strong>Текст:</strong> ".$usertext."</p>\r\n";
    $msg .= "</body></html>";
    
    if(@mail($sendto, $subject, $msg, $headers)) {
        echo "<center><h1>Письмо успешно отправлено! </br>
        Спасибо за Ваше письмо!</h1></center>";
    } else {
        echo "<center><h1>Сообщение не отправлено.</br>
        Пожалуйста, обновите страницу и попробуйте еще раз!</h1></center>";
    }
    
?>

</body>
</html>