<?php
function isValidEmail($mail){
    if($mail === null || $mail === ''){
        return null;
    }else if(str_contains($mail, '@') && str_contains($mail, '.')){
        return true;
    }else{
        return false;
    }
}