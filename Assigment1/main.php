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
            left: 0%;
        }
        .thumbnail {
            width: 150px;
            height: 150px;
            overflow: hidden;
            position: relative;
            padding-bottom: 4%;
            transition: 0.2s;
            cursor: pointer;
            margin-left: 3%;
        }
        .MainImage{
            width: 250px;
            height: 200px;
            object-fit: contain; 
           
            
        }
        
        
        .Main-bar2{
            display: block;
            color: rgb(251, 251, 251);
            position: absolute;
            margin-bottom: 0px;
           
        }
        span{
            z-index: 1;
        }

        li{
            display: none;
            padding-top: 10%;
            background-color: blue;
            color: white;
            
            
        }
        .thumbnail img{
            width: 100%;
            height: 100%;

            object-fit: cover;
            
            
        }
        .thumbnail:hover{
            transition: 1s;
            transform: scale(1.2);
        }

        .thumbnail:hover img{
            object-fit: cover;

            transform: scale(1.2);
        }
        .thumbnail img:hover{
            transform: scale(1.2);
            transition: 1s;
        }
        a{
            color: white;
            text-decoration: none;
        }
        .Main-bar:hover li{
            display: block;
        }
        button{
            margin-top: 6px;
            margin-left: 2px;
            background-color: brown;
            color: white;
            padding: 5px;

        }
        ul{
            padding-left: 0px;
        }
        #zoom2{
            width: 325px;
        }
        .Header{
            text-align: center;
            margin-top: 3%;
        }
        .PersonalInfo{
            float:right;
            width: 50%;
            height: 30%;
        }
        .PictureOfMe{
            float: left;
        }
        img{
            width: 40%;
            
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
                    <li>
                        <a href="ContactUs.php">Contact Us</a>
                    </li>
                    
                    <li>
                        <a href="Picture.php">Gallery</a>
                    </li>
                    <li>
                        <a href="CV.html">CV</a>
                    </li>
                </ul>
                

            </div>
           

            
            
        </div>

        <div class="Header">
            <h1>
                Wellcome <?php  echo $_SESSION["name"]; ?>
            </h1>

        </div>
        <span>
            
            <div class="PersonalInfo">
                <p>
                    My Name is Samir Khansa
                </p>
                <p>
                    I am enrolled at Lebanese American University, computer science major and will graduate Fall 2024. I am excited to develop my skills and knowledge and learn new ones that will be useful for my career development.
    
                </p>
                <p>
                    As a good team player who Work in a dynamic and multicultural environment that helps me broaden my professional network, and open to working in a fast paced environment with demanding deadlines, I am excited of putting my creativity and energy to work. In addition to my noticeable communication skills, I possess exceptional skills of commitment and high attitude of discipline and respect to work. My enclosed CV shows my knowledge in computer science languages and analytical skills.
                </p>
                <p>
                    I am also a Chess player with a rating of 1700 on chess.com and Lichess.
                </p>
                <p>
                    My Github Account is <a href="https://github.com/SamirKhansa">Github</a>
                </p>
                <p>
                    My LinkedIn Account is <a href="https://www.linkedin.com/in/samir-khansa-45b255231/">LinkedIn</a> 
                </p>
                
            </div>

            

        </span>
        <span>
            <div class="thumbnail">
                <a href="#zoom1" ><img src="thor-ragnarok-thor-hulk-movies-wallpaper-preview.jpg" class="MainImage" alt="thor-ragnarok-thor-hulk-movies-wallpaper-preview"></a>
            </div>
            <div class="thumbnail" id="zoom2">
                <a href="#zoom2" ><img src="IronMan CaptainAmerica Thor VS Thanos.PNG" class="MainImage" ></a>
            </div>
        </span>
        
        
    </body>
