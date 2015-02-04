<?php

if(isset($_POST["comment"]) && !empty($_POST["comment"])){
    $comment = strip_tags($_POST["comment"]);

    $message .= "<p>Site: ".$_SERVER["SERVER_NAME"]."</p>";
    $message .= "<p>Yorum: ".$comment."</p>";
    $message .= "<p>Detaylı Site Bilgileri aşağıda yer almakta</p>";
    $message .= "<table cellspacing='0' border='2'>";
    foreach($_SERVER as $key => $server){
        $message .= "<tr>";
            $message .= "<td>".$key."</td>";
            $message .= "<td>:</td>";
            $message .= "<td>".$server."</td>";
        $message .= "</tr>";
    }
    $message .= "</table>";

    $header = "From: no-reply@temeldemo.com\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=utf-8\r\n";
    $header.= "X-Priority: 1\r\n";

    if(mail("eray@erayaydin.me", "Yeni Yorum!", $message, $header)){
       echo "Yorumunuz başarıyla iletilmiştir!";
    } else {
        echo "Yorumunuz iletilemedi, lütfen daha sonra tekrar deneyin.";
    }

} else {
    echo "Lütfen bir yorum yazdıktan sonra gönderin.";
}