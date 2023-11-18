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
            display: inline-block;
            text-align: left;
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
        .any{
            width: 60%;
        }
        .any2{
            width: 37%;
        }
    </style>
</head>
<body>
<div class="Main-bar">
           
           </div>
    


           

<section class="SignUp_Form">
    <br>
    <h1>Wellcome!!</h1>
    <span class="BoxPart">

        <form action="../Includes/SignUp.inc.php" method="post">
           
    
            <label for="name1" class="Aligning">First Name</label>
            <input type="text" name="name1" id="name1"  placeholder="First Name..." required>
            <br>
            <br>
            <label for="lastname" class="Aligning">Last Name</label>
            <input type="text" name="lastname" id="lastname"  placeholder="Last Name..." required>
            <br>
            <br>
            <label for="name" class="Aligning">User Name</label>
            <input type="text" name="name" id="name"  placeholder="User Name..." required>
            <br>
            <br>
            <label for="date" class="Aligning">Date</label>
            <input type="date" name="date" id="date"  placeholder="Date of Birth" required>
            <br>
            <br>
            <label for="sex" class="Aligning">Sex</label>
            <br>
            <label  class="Aligning">Male  <input type="radio" name="sexname1" value="M" id="sexname1"  placeholder="Male" required></label>
            
            <label  class="Aligning">Female  <input type="radio" name="sexname1" value="F" id="sexname2"  placeholder="Female" required></label>
            
            <br>
            <br>
            
            <label for="email" class="Aligning">Email</label>
            <input type="email" id="email" name="email" class="any" placeholder="Email" required>
            <br>
            <br>
            <label for="pass" class="Aligning">Password</label>
            <input type="password" name="pwd" id="pass" placeholder="Password" required>
            <br>
            <br>
            <label for="pass2" class="Aligning">Confirm Password</label>
            <input type="password" name="pwdRepeate" id="pass2" class="any2" placeholder="Confirm Password" required>
            <br>
            <br>
            
            <button type="submit" name="submit">Sign Up </button>
           
            
        </form>
    </span>
</section>
</body>
</html>

