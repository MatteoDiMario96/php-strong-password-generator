<?php 

function validationLog($userName, $passWord, $array){
    foreach ($array as  $value) {
        if($value['userName'] === $userName && $value['passWord'] === $passWord){
            return true;
        }
    }
    return false;
}

?>