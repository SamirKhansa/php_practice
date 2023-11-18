<?php
function emptyInputSignUp($name,$email,$password,$password_confirm){
    $results="true";
    if(empty($name) || empty($email) || empty($password) || empty($password_confirm)){
        $results = "true";
    }
    else{
        $results = "false";

    }
}

function PasswordIncorrect($password,$password_confirm){

    $results="false";

    if($password!==$password_confirm){
        $results = "true";
    }
}

function createUser($name,$email,$password,$password_confirm){
    $sql="Select"
}
