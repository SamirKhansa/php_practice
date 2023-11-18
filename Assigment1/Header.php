



<!DOCTYPE html>
<head>
        <title>
            Main Page
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
    </style>
</head>    
<html lang="en">
<div class="Main-bar">
           
           <span class="Main-bar2">
               Menu
           </span>
           <div class="FlotLeft">
               <a href="SignUp.php">SignUp</a>
              
           </div>
           <div class="FlotLeft">
               <a href="LogIn.php">Login</a>
              
           </div>
           
          

           <div class="Main-bar2">
               <ul>
                   <li>
                       <a href="ContactUs.html">Contact Us</a>
                   </li>
                   
                   <li>
                       <a href="Picture.html">Gallery</a>
                   </li>
                   <li>
                       <a href="CV.html">CV</a>
                   </li>
               </ul>
               

           </div>
</html>