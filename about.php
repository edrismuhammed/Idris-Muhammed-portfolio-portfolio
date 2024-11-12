<?php
require ("header.php");
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
<body>
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="IMG_20210102_162510777~2.jpg" alt="user image">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About me</h1>
                <details>
                <summary class="summary-text">I am an Electrical and Computer Engineering (Computer Engineering) student at Woldia University.</summary>

                    <p> My passion for technology and innovation drives me to constantly explore and learn in these fields.

                    Being an electrical engineering student, I have gained knowledge in various areas such as circuit design, power systems, and electronics. I am skilled in analyzing and designing electrical systems to ensure efficient power distribution and effective operation.
                    
                    Additionally, my computer engineering background has given me expertise in programming languages such as C++, Python, and Java,html,css and other linked with my department. I enjoy working on software development projects and have experience in developing applications and algorithms.
                    
                    As a student, I am focused, dedicated, and always eager to expand my knowledge. I thrive in challenging environments and enjoy finding innovative solutions to complex problems. I believe that combining my electrical engineering skills with computer engineering techniques can lead to groundbreaking advancements and contribute to technological advancements.
                    
                    Outside of academics, I am a team player and have actively participated in various extracurricular activities. Through teamwork, I have enhanced my communication and leadership skills, which are vital in collaborating with colleagues and delivering successful projects.
                    
                    Feel free to explore my website to learn more about my projects, skills, and experiences. <br> Thank you for visiting!</p>
                </details>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">My skills</p>
                    <p class="tab-links" onclick="opentab('Experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('Education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Web development</span> <br> Web app development</li>
                        <li><span>Web development</span><br> Web app development</li>
                        <li><span>Embedded</span><br>Hardware designing arduino, proteus based </li>
                    </ul>
                </div>
                <div class="tab-contents" id="Experience">
                    <ul>
                        <li><span>2012-2016 E C</span> <br>student in Woldia university institution of technology</li>
                        <li><span>2010-2011 E C</span><br>student in A/G/P and secondary school</li>
                        <li><span>200-2009 E C </span><br>Student in Anger waja secondary high school.</li>
                    </ul>
                </div>
                <div class="tab-contents" id="Education">
                    <ul>
                        <li><span>2012-2016 E C</span> <br>I was learning electrical and computer engineering(COMPUTER ENGINEERING) in Woldia university institution of technology</li>
                        <li><span>2010-2011 E C</span><br>student in A/G/P and secondary school</li>
                        <li><span>200-2009 E C </span><br>Student in Anger waja secondary high school.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require ("footer.php");
?>
</div>
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