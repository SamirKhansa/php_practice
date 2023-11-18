<!DOCTYPE html> 
<html lang="en">
<head>
    <title>
        Main Page
    </title>
    <style>
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
        body{
            background-color: chocolate;
        }
        .SignUp_Form{
            position: relative;
            text-align: center;
        }
        button{

        }
        .BoxPart{
            position: relative;
            display: inline-block;
            align-content: center;
            width: 20%;
            
            padding-top: 2%;
            
            background-color: rgba(255, 255, 255, 0.652);
            
        }
        .Aligning{
            position: relative;
            display: block;
            text-align: left;
            left: 21%;
            margin-bottom: 1.8%;
        }
        button{
            border: none;
            background-color: greenyellow;
            width: 100%;
            display: inline-block;
            padding-bottom: 3px;
            transition: background-color 1s;
        }
        button:hover{
            background-color: rgb(78, 95, 51);
        }
    </style>
</head>
<body>
<div class="Main-bar">
           
           
</div>
    
    <section class="SignUp_Form">
        <br>

        <h1>Good To See You!!</h1>
        <span class="BoxPart">
            <form action="../Includes/Login.inc.php" method="post">
                <label for="nam" class="Aligning">UserName </label>
                
                <input type="text" id="nam" name="name" placeholder="UserName" required>
                <br>
                <br>
                <label for="pass" class="Aligning">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Password...." required>
                <br>
                <br>
                <button type="submit" name="submit">LogIn </button>
                
            </form>
    </span>
        
    </section>

    </body>
</html>
