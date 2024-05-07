<?php

$mail = $_POST['newsletter'] ?? null;

$mail_validation = false;

if($mail === null){
    $mail_validation = null;
}else if(str_contains($mail, '@') && str_contains($mail, '.')){
    $mail_validation = true;
}else{
    $mail_validation = false;
}
?>