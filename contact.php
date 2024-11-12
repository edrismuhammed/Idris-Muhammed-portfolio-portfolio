<?php
require ("header.php");



$fname="";
$email="";
$message="";
$congra="";
$err= array();

$conn= mysqli_connect("localhost", "root", "", "Contactme");




if(isset($_POST['submit'])){
    $fname= mysqli_real_escape_string($conn, $_POST['Name']);
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $message=mysqli_real_escape_string($conn, $_POST['message']); 

    
    
        $query= "INSERT INTO comment (fullname, email,messagee) VALUES ('$fname', '$email', '$message')";
        mysqli_query($conn, $query);

        $congra= "successfully registered";
    
    
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
    i{
        color: white;
    }
    .bb{
        padding: 50px;
    }
    embed{
        width: 200px;
        height: 150px;
    }
</style>
<body>
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact me</h1>
                <p><i class="fas fa-envelope"></i>&nbsp;<a href="mailto:ecegcomputer2016@gmail.com">ecegcomputer2016@gmail.com</a></p>
                    <p><i class="fas fa-phone-alt"></i>&nbsp;<a href="tel:+251917289093">+251917289093</a></p>
                    <p><i class="fas fa-phone"></i>&nbsp;<a href="tel:+251924469318">+251924469318</a></p>
                    <h1 class="bb">My CV <br> <br><embed src="CV___idris.pdf" type="Application/pdf" ></h1>


        
               
            </div>
            <div class="contact-right">
                <form action="display.php" method="POST" >
                    <input type="text" name="Name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your email" required>
                    <textarea name="message"  rows="10" placeholder="your message"></textarea>
                    
                    <!-------<input type="file" name="file" accept="image/*,video/*, audio/*, .rar,application/zip, .pdf"  multiple>----->

                    <input type="submit" value="submit" name="submit" onclick="alert('Are you sure, you entered the feild!')" class="btnbtn">
                </form>
            </div>
            </div>
</div>
<?php
require ("footer.php");
  ?>
<script>
var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
function opentab(tabname){
   for(tablink of tablinks){
    tablink.classList.remove("active-link");
   }
   for(tabcontent of tabcontents){
    tabcontent.classList.remove("active-tab");
   }
   event.currentTarget.classList.add("active-link");
   document.getElementById(tabname).classList.add("active-tab");
}
</script>
<script>
var sidemenu=document.getElementById("sidemenu");
function openmenu(){
    sidemenu.style.right="0";
}
function closemenu(){
    sidemenu.style.right="-200px";
}
</script>
</body>
</html>