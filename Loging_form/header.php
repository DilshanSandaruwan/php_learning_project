<?php
 session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dilshan Sandaruwan</title>

    <style>
        *{
            margin: 0;
        }
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #04AA6D;
}

/*css for the form */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.form{
  width: 70%;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
}
</style>

</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <!-- <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li> -->
  
  <?php
    if (isset($_SESSION["username"])) {
      echo '<li style="float:right"><a href="include/logout.inc.php"> Logout </a></li>';
        echo '<li style="float:right"><a href="profile.php">'.$_SESSION["username"].' ! </a></li>';
    }else{
        echo '<li style="float:right"><a href="login.php"> Login </a></li>';
    }
    ?>
</ul>

<div class="contanier" style="margin: 10px;">