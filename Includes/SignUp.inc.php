<?php


session_start();


$_SESSION = array();


session_destroy();

session_start();


$_SESSION = array();


session_destroy();

if(isset($_POST["submit"])){
    $firstname=$_POST["name1"];
    $lastname=$_POST["lastname"];
    $name=$_POST["name"];
    $date=$_POST["date"];
    $email=$_POST["email"];
    $Sex=$_POST["sexname1"];
    $password=$_POST["pwd"];
    $password_confirm=$_POST["pwdRepeate"];
    if($password!= $password_confirm){
       
        echo "<script>alert('Password and confirm password are not equal'); window.location.href = '../Assigment1/SignUp.php?PasNEConfpass';</script>";
        exit();

    }


    $inputvalues=[
        "FirstName"=>$firstname,
        "Last Name" => $lastname,
        "name"=> $name,
        "date"=> $date,
        "email"=> $email,
        "Sex"=> $Sex,
        "password"=> $password
    ];
    $inputvalues= file_get_contents("inputvalue.json");
    $inputvalues=json_decode($inputvalues,true);
    if(isset($inputvalues[$name])){
        echo "<script>alert('User already exists. Please choose a different username.'); window.location.href = '../Assigment1/SignUp.php.';</script>";
    }
    else{
        $inputvalues[$name]=[
            "FirstName"=>$firstname,
            "Last Name" => $lastname,
            "name"=> $name,
            "date"=> $date,
            "email"=> $email,
            "Sex"=> $Sex,
            "password"=> $password
            // 'password'=> password_hash($password,PASSWORD_BCRYPT),
            
            
            

        ];
        file_put_contents("inputvalue.json",json_encode($inputvalues,JSON_PRETTY_PRINT));
        echo "<script>alert('Signup successful! You can now log in.'); window.location.href = '../Assigment1/LogIn.php';</script>";
    }


   
    




}
else{
    header  ("location: ../Assigment1/SignUp.php");
}
