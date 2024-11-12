<?php
require "header.php";

$conn= mysqli_connect("localhost", "root", "", "Contactme");


$sql= "SELECT id, fullname, email, messagee, date FROM comment";
$result= mysqli_query($conn, $sql);

/*echo "<table border=0 style='width: 70%;'>";
echo "<tr><td>id</td><td>fullname</td><td>email</td><td>messagee</td><td>date</td></tr>";

while($row= mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row["id"]}</td><td>{$row["fullname"]}</td><td>{$row["email"]}</td><td>{$row["messagee"]}</td><td>{$row["date"]}</td></tr>";
}
echo "</table>";*/
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
  background-image: url(back.jpg);

}
table{
  height: auto;

}

.tab{
  margin-top: 30px;
  height: auto;
  
  max-width: 80%;
}
th{
  background-color: green;
}
td{
  word-wrap: break-word;
  width: 200px;
  max-width: 750px;
  padding: 10px;
}
table, th, td {
  border: 1px solid yellow;
  border-collapse: collapse;
}
tr:nth-child(even){
  background-color: #555;
}

</style>
<body>
  <div class="tab">
    <table border=1; >
      <thead>
        <tr>
          <th>S.no</th>
          <th>Full name</th>
          <th>Email</th>
          <th style="width: 150px;">Message</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php

while($row= mysqli_fetch_assoc($result)){
  echo "<tr><td>{$row["id"]}</td><td>{$row["fullname"]}</td><td>{$row["email"]}</td><td>{$row["messagee"]}</td><td>{$row["date"]}</td></tr>";
}

        ?>
      </tbody>
    </table>
    </div>
</body>
</html>