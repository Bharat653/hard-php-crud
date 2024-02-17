<?php
session_start();
require "connection.php";

if (isset($_POST['update'])) {

  // $id =  $_POST['id'];
  $Employe_name = $_POST['Employe_name'];
  $Employe_field = $_POST['Employe_field'];
  $department_name = $_POST['department_name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $picture = $_FILES['picture'];
  $address = $_POST['address'];
  $hobby = $_POST['hobby'];
  $employe_code = $_POST['employe_code'];
  $designation = $_POST['designation'];
  $depart = $_POST['depart'];
  $b_salary = $_POST['b_salary'];
  $h_salary = $_POST['h_salary'];
  $d_salary = $_POST['d_salary'];
  $t_salary = $_POST['t_salary'];
  

  $database = new database;
  $result = $database->updatedepartment([
      // 'id' => $id,
      'Employe_name' => $Employe_name,
      'Employe_field' => $Employe_field,
      'department_name' => $department_name,
      'number' => $number,
      'email' => $email,
      'picture' => $picture,
      'address' => $address,
      'hobby' => $hobby,
      'employe_code' => $employe_code,
      'designation' => $designation,
      'depart' => $depart,
      'b_salary' => $b_salary,
      'h_salary' => $h_salary,
      'd_salary' => $d_salary,
      't_salary' => $t_salary,
  ]);
  if ($result) {
      echo "Updation successfully";
  } else {
      echo "Not working";
  }
}

if (isset($_REQUEST['submit'])) {
  if (($_REQUEST['Employe_name'] == "") || ($_REQUEST['Employe_field'] == "")
    || ($_REQUEST['department_name'] == "") || ($_REQUEST['number'] == "")
    || ($_REQUEST['email'] == "")
    || ($_REQUEST['address'] == "") || ($_REQUEST['employe_code'] == "")
    || ($_REQUEST['hobby'] == "") || ($_REQUEST['designation'] == "")
    || ($_REQUEST['depart'] == "") || ($_REQUEST['b_salary'] == "")
    || ($_REQUEST['h_salary'] == "") || ($_REQUEST['d_salary'] == "")
    || ($_REQUEST['t_salary'] == "")
  ) {
    echo "all Fileds required";
  }
  if ($database->isEmployeeCodeExists($_REQUEST['employe_code'])) {
    echo "Employee code already exists.";
  } else {
    $department = $database->addemploye();
  }
}




$gdepartment = $database->getdepartment();



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form | CodingLab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <?php require_once "bar/upperbar.php"; ?>
  <div class="container">

    <div class="wrapper">
      <div class="title"><span>Add Employe</span></div>
      <form action="employe.php" method="post" enctype="multipart/form-data">
        <h1>Personal </h1>
        <!-- Employe_name -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-book"></i>
              <input type="text" name="Employe_name" placeholder="First Name" required>
            </div>
          </div>
          <!-- Employe_field -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-list"></i>
              <input type="text" name="Employe_field" placeholder="Employe_field" required>
            </div>
          </div>
        </div>
        <!-- Row 2 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-at"></i>
              <select name="department_name" class="form-control input-sm" style="padding-left: 3.5rem;">
                <option>Select Department</option>
                <?php foreach ($gdepartment as $data) : ?>
                  <option value="<?php echo $data['id']; ?>"><?php echo $data['department_name']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <!-- number -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fa-brands fa-pinterest"></i>
              <input type="number" name="number" placeholder="Mobile number" required>
            </div>
          </div>
        </div>
        <!-- email  -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="email" placeholder="email Address">
            </div>
          </div>
          <!-- picture  -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <input type="file" name="picture" placeholder="Employe picture">
            </div>
          </div>
        </div>
        <!-- address  -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="address" placeholder="address">
            </div>
          </div>
          <!-- hobby  -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>

              <fieldset data-role="controlgroup" name="hobby">
                <!-- <option> -->
                <legend>Choose your Hobby:</legend>
                  <input type="checkbox" id="vehicle1" name="hobby[]" value="Walking"> Walking</input>
                  <!-- <label for="vehicle1"> I have a bike</label><br> -->
                  <input type="checkbox" id="vehicle2" name="hobby[]" value="Eating"> Eating</input>
                  <!-- <label for="vehicle2"> I have a car</label><br> -->
                  <input type="checkbox" id="vehicle3" name="hobby[]" value="Running"> Running</input>
                  <!-- <label for="vehicle3"> I have a boat</label><br><br> -->
                  </fieldset>
            </div>
          </div>
        </div>

        <!-- ///////// -->
        <h1>Organistation</h1>

        <!-- employe_code -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="employe_code" placeholder="employe_code "  >
            </div>
          </div>
          <!-- designation -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <fieldset data-role="controlgroup" name="designation">
                <legend>Choose your designation:</legend>
                <label for="Senior Manager">Senior Manager</label>
                <input type="radio" name="designation" id="Senior Manager" value="Senior Manager" checked></br>
                <label for="Associate">Associate</label>
                <input type="radio" name="designation" id="Associate" value="Associate"></br>
                <label for="Manager">Manager</label>
                <input type="radio" name="designation" id="Manager" value="Manager"></br>
                <label for="Designer">Designer</label>
                <input type="radio" name="designation" id="Designer" value="Designer"></br>
                <label for="Developer">Developer</label>
                <input type="radio" name="designation" id="Developer" value="Developer">
              </fieldset>
            </div>
          </div>
        </div>

        <!-- depart -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <fieldset data-role="controlgroup" name="depart">
                <legend>Choose your depart:</legend>
                <label for="Production ">Production </label>
                <input type="radio" name="depart" id="Production " value="Production " checked></br>

                <label for="Manufacturing ">Manufacturing </label>
                <input type="radio" name="depart" id="Manufacturing " value="Manufacturing "></br>

                <label for="Testing ">Testing </label>
                <input type="radio" name="depart" id="Testing " value="Testing "></br>

                <label for="Customer Support">Customer Support</label>
                <input type="radio" name="depart" id="Customer Support" value="Customer Support"></br>

              </fieldset>
            </div>
          </div>

        </div>
        <h1>Salary</h1>
        <!-- Row 7 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="number" name="b_salary" placeholder="Basic Pay">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <input type="number" name="h_salary" placeholder="House Allowance">
            </div>
          </div>
        </div>
        <!-- row 8 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="number" name="d_salary" placeholder="Dearness Allowance">
            </div>
          </div>
          <!-- t_salary -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <input type="number" name="t_salary" placeholder="Total Salary" readonly>
            </div>
          </div>
        </div>

        <h1>Qualification</h1>

        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="records">
                <div class="record-row">
                  <input type="number" placeholder="Passing Year" name="passing[]" class="inputs" />
                  <input type="text" placeholder="Course" name="course[]" class="inputs" />
                  <input type="text" placeholder="University" name="university[]" class="inputs" />
                  <input type="number" placeholder="Perecentage" name="percentage[]" class="inputs" />
                  <input type="file" name="picture2" />
                  <button type="button" class="addmorebtn">+</button>
                  <button type="button" class="deletemorebtn d-none">-</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- button -->
        <div class="row button">
          <input type="submit" value="submit" name="submit">
        </div>

      </form>
    </div>
  </div>
  <?php require_once "bar/script.php"; ?>
</body>

<script>
  // calculate the salary
  $(document).ready(function() {
    $("[name='b_salary'], [name='h_salary'], [name='d_salary']").on('input', function() {
      calculateTotalSalary();
    });

    function calculateTotalSalary() {
      var basicSalary = parseFloat($("[name='b_salary']").val()) || 0;
      var houseSalary = parseFloat($("[name='h_salary']").val()) || 0;
      var dearnessSalary = parseFloat($("[name='d_salary']").val()) || 0;

      var totalSalary = basicSalary + houseSalary + dearnessSalary;
      $("[name='t_salary']").val(totalSalary);
    }
  });
// add more functionality
  $(document).on("click", ".addmorebtn", function() {
    var parent = $(this).parents('.records');
    var clone = parent.clone();
    clone.find(".inputs").val("");
    $(this).parents('.records').after(clone);
    shoHide();
  });

  $(document).on('click', '.deletemorebtn', function() {
    var parent = $(this).parents('.records');
    parent.remove();
    shoHide();
  });

  function shoHide() {
    if ($('.records').length <= 1) {
      $('.addmorebtn').removeClass('d-none');
      $('.deletemorebtn').addClass('d-none');
    } else {
      $('.addmorebtn').addClass('d-none');
      $('.deletemorebtn').removeClass('d-none');
      $('.addmorebtn').last().removeClass('d-none');
    }
  }
</script>



</html>