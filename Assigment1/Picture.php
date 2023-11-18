<?php
session_start();

if (!isset($_SESSION["name"])) {
    header("location: ../Assigment1/index.html");
    exit();
}

if (isset($_SESSION["file"])) {
    $file = $_SESSION["file"];
}

// Read photos from the JSON file
$galleryData = file_get_contents("../Includes/Gallery.json");
$gallery = json_decode($galleryData, true);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <style>
       
        body {
            background-color: chocolate;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
            /* margin-left: 15px;
            margin-right: 15px; */
            position: relative;
            margin-bottom: 15px;
            
        }


        .MainImage{
            width: 250px;
            height: 200px;
            object-fit: contain; 
            justify-content: center;
            
        }
        img{
            transition: transform 1s;
        }
         .thumbnail {
            width: 150px;
            height: 150px;
            overflow: hidden;
            position: relative;
            transition: 0.2s;
            cursor: pointer;
            transition: transform 1s;
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
            
            transition: 1s;
        }
        .NewDiv{
            
            display: none;
            background-color: blue;
            width: 800px;
            height: 600px;
            position: absolute;
            top: 0%;
            margin-bottom: 30px;
            z-index: 1;

        }
        .NewDiv:target{
            display: block;
        }
        .Zoom{
            top: 10%;
            left: 10%;
            position: absolute;
            
            
            width: 80%;
            height: 80%;
            object-fit: cover;
        }

        a{
            color: white;
            text-decoration: none;
            
        }

        .ButtonReturn img{
            height: 20px;
            width: 20px;
            padding:10px ;
            float: right;
        }
        .Main-bar{
            top: 0;
            z-index: -1;
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
        li{
            display: none;
            padding-top: 10%;
            background-color: blue;
            color: white;
            
        }
        .Main-bar:hover li{
            display: block;
        }
        ul{
            padding-left: 0px;
        }
        .button2{
            display: none;
            color: black;
            background-color: blueviolet;
        }
        .butts{
            display: none;
            color: blue;
            position: absolute;
            margin-bottom: 0px;
           
        }

        li{
            background-color: blue;
            color: white;
            
        }
        .Main-bar:hover .butts{
            display: block;
        }
        h1{
            margin-top: 3%;
        }
        .FlotLeft{
            color: black;
            float: right;
            position: relative;
            right: 1%;
            margin-right: 12px; 
        }
        .buttom{
            position: absolute;
            overflow: hidden;
            display: inline-block;
            bottom: 0%;
            


        }
        .gallerys{
            border: none;
            background-color: blueviolet;
           
        }
        .file-input {
        position: absolute;
        font-size: 100px;
        right: 0;
        top: 0;
        opacity: 0;
        cursor: pointer;
    }
    


    .gallerys2:hover{
        /* cursor: pointer; */
        background-color: black;
    }

    .file-input:hover{
        cursor: pointer;
        background-color: black;
    }

    .custom-button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        
    }
    .custom-button:hover{
        color: black;
    }
    .gallerys2{
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;

    }
    .gallerys2:hover{
        color: black;
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
                    <a href="main.php">HomePage</a>
                </li>
                
                <li>
                    <a href="ContactUs.php">Contact Us</a>
                </li>
                <li>
                    <a href="CV.html">CV</a>
                </li>
               
            </ul>
            
            

        </div>
        
    </div>

    

    <center id="FrontEnd" >
        <h1>
            Gallery
        </h1>
    </center>
    
        
    
    <div class="gallery">
        <?php foreach ($gallery as $key => $photo): ?>
            <div class="thumbnail">
                <a href="#zoom<?= $key ?>" ><img src="<?= $photo['file'] ?>" class="MainImage" alt="Photo <?= $key ?>"></a>
            </div>
            <div class="NewDiv" id="zoom<?= $key ?>"><img src="<?= $photo['file'] ?>" class="Zoom"></a><a href="../Assigment1/Picture.php" class="ButtonReturn" ><img src="XXXXXXX.png"></a></div>
        <?php endforeach; ?>
    </div>

    <div class="buttom">
        <form action="../Includes/UploadPhotos.php" method="post" enctype="multipart/form-data">
            <input class="file-input" type="file" id="fi" name="file" placeholder="UploadFile" required>
            <label for="fi" class="custom-button">Choose File</label>
            <button type="submit" class="gallerys2" name="submit">UploadFile </button>
        </form>
    </div>
</body>
</html>



