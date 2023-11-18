<?php

session_start();
if(!isset($_SESSION["name"])){
    
    header("location: ../Assigment1/index.html");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            ContactUs
        </title>
        <style>
            body{
                background-color: chocolate;
            }
            .Main-bar{
            top: 0;
            z-index: 1;
            position: fixed;
            width: 100%;
            background-color: blue;
            position: fixed;
            height: 5%;
            left: 0%;
        }
        .Main-bar2{
            display: block;
            color: rgb(251, 251, 251);
            position: absolute;
            margin-bottom: 0px;
           
        }
        .FlotLeft{
            color: black;
            float: right;
            position: relative;
            right: 1%;
            margin-right: 12px; 
        }
        .li2{
            display: none;
            padding-top: 10%;
            background-color: blue;
            color: white;
            
            
        }
        span{
            z-index: 1;
        }
        ul{
            padding-left: 0px;
        }
        .Main-bar:hover .li2{
            display: block;
        }
        a{
            color: white;
            text-decoration: none;
        }
        h1{
            margin-top: 4%;
        }
        .Listt{
            display: block;
            text-align: center;
            con
        }
        
        </style>

        
    </head>

    <body>
        <div class="Main-bar">
           
            <span class="Main-bar2">
                Menu
            </span>
            <br>    
            <div class="FlotLeft">
                
                <a href="../Includes/LogOut.php">LogOut</a>
               
            
               
            </div>
            <div class="FlotLeft">
                
                <p style="display:inline;"> Wellcome <?php  echo $_SESSION["name"]; ?> </p>
            </div>
            

            <div class="Main-bar2">
                <ul>
                    <li class="li2">
                        <a href="main.php">HomePage</a>
                    </li>
                    
                    <li class="li2">
                        <a href="Picture.php">Gallery</a>
                    </li>
                    <li class="li2">
                        <a href="CV.html">CV</a>
                    </li>
                    
                </ul>
                

            </div>
           

            
            
        </div>
        <center>
            <h1>
                Contact Info
            </h1>
        </center>
        <div class="Listt">
            
            <ul>
                <li>
                    <p>
                        Phone Number: 961-71523488
                    </p>
                    
                </li>
                <li>
                    <p>
                        <a href="samirkhansa01@gmail.com">Email</a>
                    </p>

                </li>
                <li>
                    <p>
                        My LinkedIn Account is <a href="https://www.linkedin.com/in/samir-khansa-45b255231/">LinkedIn</a> 
                    </p>
                </li>
                <li>
                    <p>
                        My Github Account is <a href="https://github.com/SamirKhansa">Github</a>
                    </p>
                </li>
            </ul>
        </div>
        
        
    </body>