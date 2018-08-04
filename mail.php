<?php

$recepient = "seowwwdecide@gmail.com";
$sitename = "wwwdecide.github.io"

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);


$message = "Имя: $name \nТелефон: $phone \nТекст: $text;"

$pagetitle = "новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From:$recepient");