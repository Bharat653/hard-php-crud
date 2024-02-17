<?php
session_start();
require "connection.php";

if (isset($_POST['update'])) {

  $id =  $_POST['id'];
  $department_name = $_POST['department_name'];
  $department_field = $_POST['department_field'];


  $database = new database;
  $result = $database->updatedepartment([
      'id' => $id,
      'department_name' => $department_name,
      'department_field' => $department_field,
  ]);
  if ($result) {
      echo "Updation successfully";
  } else {
      echo "Not working";
  }
}

if (isset($_REQUEST['submit'])) {
  if (($_REQUEST['department_name'] == "") || ($_REQUEST['department_field'] == "")) {
    echo "all filed required";
  } else {
    $department = $database->adddepartment();
    // print_r($department);
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | CodingLab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <?php require_once "bar/upperbar.php"; ?>
  <div class="container">

    <div class="wrapper">
      <div class="title"><span>Add department</span></div>
      <form action="department.php" method="post">


        <div class="row">
          <i class="fas fa-at"></i>
          <input type="text" placeholder="Department Name" name="department_name" required>
        </div>
        <div class="row">
          <i class="fas fa-at"></i>
          <input type="text" placeholder="Department field" name="department_field" required>
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