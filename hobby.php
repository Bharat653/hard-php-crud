<?php
session_start();

require "connection.php";


if(isset($_REQUEST['submit'])){
    if(($_REQUEST['hobby'] == "")){
        echo "all fields required";
    }
    else {
        $result = $database->addhobby();
        if($result){
            echo "added succesfully";
        }
        else {
            echo "not added";
        }
    }
}
$database = new database;
// $authordata = $database->getauthor();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form | CodingLab</title> 
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
  <?php require_once "bar/upperbar.php"; ?>
    <div class="container">
   
      <div class="wrapper">
        <div class="title"><span>Add Hobby</span></div>
        <form action="hobby.php" method="post">
          <div class="row">
            <i class="fas fa-at"></i>
            <input type="text" placeholder="Hobby" name="hobby" required>
          </div>
          <div class="row button">
            <input type="submit" value="submit" name="submit">
          </div>
   
        </form>
      </div>
    </div>
    <?php require_once "bar/script.php"; ?>
  </body>
</html>