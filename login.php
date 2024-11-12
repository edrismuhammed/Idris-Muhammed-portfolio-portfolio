<?php

require ("header.php");
$fname="";
$password="";
$err="";
$re="";
//connection

$conn= mysqli_connect("localhost", "root", "", "contactme");

$ppp="INSERT INTO userss('fname', 'password') VALUES ('edrismuhammed','hananedris2015')";
if(mysqli_query($conn, $ppp)){
    echo "data inserted successfully";

} 

if(isset($_POST['LOGIN'])){
    $fname= mysqli_real_escape_string($conn, $_POST['fname']);
    $password= mysqli_real_escape_string($conn, $_POST['password']);
    $sql="SELECT * FROM users WHERE fname='".$fname."' AND password='".$password."' limit 1";
    $result=mysqli_query($conn, $sql);
    
    if($result){

    $re=mysqli_num_rows($result);
    }if(empty($fname)){
        $error="username is require";

    }else if (empty($password)){
        $err="password require";


    }else if(!$re){
echo "error".mysqli_error($conn);
    }else
    {
        header('location: display.php');
        exit;
    }
    
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idris Muhammed portfolio</title>
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>
    
    <style>

body{
    margin-top: 100;
    padding: 0;
    background-image: url(back.jpg);
    background-size: cover;
    height: 100vh;
    font-family: sans-serif;
}
.box{
    height: 260px;
    width: 250px;
    background-color: rgba(2, 0, 5, 0.905);
    margin-top: 600px;
    opacity: 80%;
    position: absolute;
    color: #fff;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    padding: 30px 30px;
    border-radius: 30px;
}
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 25px;

}
.err{
    color: #fa0909;
}
.box input{
    width: 100%;
    margin-bottom: 20px;
    color: #fff;
}
.box input[type="text"],input[type="password"]{
border: none;
border-bottom: 1px solid #fff;
background-color: transparent;
outline: none;
height: 40px;
font-size: 15px;

}
.box input[type="submit"]{
    border: none;
    outline: none;
    height: 40px;
    background-color: aqua;
    color: #fff;
    border-radius: 20px;
    
    }
    .box input[type="submit"]:hover{
        cursor: pointer;
        background-color: azure;

        
        }
        .aa{
            margin-top: 600px;
        }


    </style>
</head>
<body>
    <div class="box">
        <h1>LOGIN HERE</h1>
        <div class="err">
            <?php
              echo $err;
            ?>
        </div>
        <form action="login.php" method="POST">
            <input type="text" name="fname" id="" placeholder="enter username" autocomplete="off">
            <input type="password" name="password" id="" placeholder="enter password" autocomplete="off">
            <input type="submit" value="LOGIN" name="LOGIN">
        </form>
    </div>

<div class="aa">


    <?php
require ("footer.php");
    ?>
    </div>
</body>
</html>