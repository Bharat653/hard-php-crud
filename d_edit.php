<?php
session_start();

require 'connection.php';
$result = [];

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $database = new database;
    $result = $database->editemploye(['id' => $id]);
    // print_r("<pre>");
    // print_r($result);
    // exit();
    // return $result;
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
              <input type="text" name="Employe_name" value="<?php echo $result[0]['employe_name'] ?>" placeholder="First Name" required>
            </div>
          </div>
          <!-- Employe_field -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-list"></i>
              <input type="text" name="Employe_field" placeholder="Employe_field" value="<?php echo $result[0]['employe_fields'] ?>" required>
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
              <input type="number" name="number" placeholder="Mobile number" value="<?php echo $result[0]['mobile_number'] ?>" required>
            </div>
          </div>
        </div>
        <!-- email  -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="email" value="<?php echo $result[0]['email'] ?>" placeholder="email Address">
            </div>
          </div>
          <!-- picture  -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <input type="file" name="picture" value="<?php echo $result[0]['picture'] ?>"  placeholder="Employe picture">
            </div>
          </div>
        </div>
        <!-- address  -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="address" value="<?php echo $result[0]['address'] ?>" placeholder="address">
            </div>
          </div>
          <!-- hobby  -->
          <div class="col-md-6 mb-4">
          <div class="row">
  <i class="fas fa-rupee-sign"></i>

  <select width="300" style="width: 350px" size="8" multiple name="hobby[]">
    <option>
      <label for="vehicle1"><input type="checkbox" id="vehicle1" name="hobby[]" value="<?php echo $result[0]['hobby'] ?>"> Walking</label><br>
      <label for="vehicle2"><input type="checkbox" id="vehicle2" name="hobby[]" value="<?php echo $result[0]['hobby'] ?>"> Eating</label><br>
      <label for="vehicle3"><input type="checkbox" id="vehicle3" name="hobby[]" value="<?php echo $result[0]['hobby'] ?>"> Running</label><br>
    </option>
  </select>
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
              <input type="text" name="employe_code" value="<?php echo $result[0]['employe_code'] ?>" placeholder="employe_code "  >
            </div>
          </div>
          <!-- designation -->
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <fieldset data-role="controlgroup" name="designation" value="<?php echo $result[0]['designation'] ?>"  >
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
              <input type="number" name="b_salary"  placeholder="Basic Pay">
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
              <input type="number" name="t_salary" value="<?php echo $result[0]['employe_salary'] ?>" placeholder="Total Salary" >
            </div>
          </div>
        </div>

        <h1>Qualification</h1>

        <div class="row">
          <div class="card">
            <div class="card-body">
              <div class="records">
                <div class="record-row">
                
                  <input type="number" placeholder="Passing Year"  value="<?php foreach($result as $resul) { echo $resul[0]['passing_year']; } ?>"  name="passing[]" class="inputs" />
                  <input type="text" placeholder="Course" value="<?php echo $result[0]['course'] ?>"  name="course[]" class="inputs" />
                  <input type="text" placeholder="University" value="<?php echo $result[0]['university'] ?>"  name="university[]" class="inputs" />
                  <input type="number" placeholder="Perecentage" value="<?php echo $result[0]['percentage'] ?>"  name="percentage[]" class="inputs" />
                  <input type="file" name="certificate" />
                  <button type="button" class="addmorebtn">+</button>
                  <button type="button" class="deletemorebtn d-none">-</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- button -->
        <div class="row button">
          <input type="submit" value="update" name="update">
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
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <style>
        .password-container {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>

<body background="">
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form action="dashboard.php" method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">dashboard</span>
                                        </div> 
                                        <div class="form-outline mb-4 id-input" style="display: none;">
                                            <input type="text" id="id" value="<?php echo $_GET['editid'] ?>" name="id" class="form-control form-control-lg" />
                                            <label class="form-label">Enter User ID (for update)</label>
                                        </div>
                                    
                                        <div class="form-outline mb-4">
                                            <input type="text" value="" id="email" name="email" class="form-control form-control-lg" />
                                            <label class="form-label">Enter Your email</label>
                                        </div>
                                        <div class="form-outline mb-4 password-container">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                            <label class="form-label">Password</label>
                                       
                                        </div>
                                        <div class="pt-1 mb-4">
                                            <input type="submit" id="update" value="update" class="btn btn-dark btn-sm" name="update">
                                        </div>

                                        <div id="loginAlert" class="alert alert-success" style="display: none;">
                                            Login successful!
                                        </div>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html> -->