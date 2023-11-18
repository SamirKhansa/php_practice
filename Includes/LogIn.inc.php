<?php

session_start();


$_SESSION = array();


session_destroy();




if(isset($_POST["submit"])){


    $UserName=$_POST["name"];
    $Password=$_POST["pass"];
    
    $inputs=file_get_contents   ("inputvalue.json");
    $inputs=json_decode($inputs,true);
    $k="false";
    foreach($inputs as $input){
        if($input["name"]==$UserName && $input["password"]==$Password){
            session_start();
            echo "<script>alert($UserName);</script>";
            $_SESSION["name"]=$UserName;
            $k="true";
            header("location: ../Assigment1/main.php");
            exit();
        }
    }
        
        
        // echo "<script>alert('Incorrect Username or password');</script>";
        if($k=="false"){
            header("location: ../Assigment1/LogIn.php");

        }
       

}
else{
    header  ("location: ../Assigment1/SignUp.php");
}

// samir khansa01
// pass=1