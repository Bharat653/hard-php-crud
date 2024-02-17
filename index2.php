<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Employee | CodingLab</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
  <?php require_once "bar/upperbar.php"; ?>
  <div class="container">

    <div class="wrapper">
      <div class="title"><span>Add Employee</span></div>
      <form action="employe.php" method="post">

        <!-- Row 1 -->
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
              <input type="text" name="Employe_field" placeholder="Last Name" required>
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
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fa-brands fa-pinterest"></i>
              <input type="number" name="number" placeholder="Mobile number" required>
            </div>
          </div>
        </div>
        <!-- Row 3 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="email" placeholder="email Address">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <input type="file" name="picture" placeholder="Employe picture">
            </div>
          </div>
        </div>
        <!-- Row 4 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="address" placeholder="address">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>

              <select width=300 style="width: 350px" size="8" multiple>
                <option>
                  <input type="checkbox" id="vehicle1" name="hobby" value="Walking"> Walking</input>
                  <!-- <label for="vehicle1"> I have a bike</label><br> -->
                  <input type="checkbox" id="vehicle2" name="hobby" value="Eating"> Eating</input>
                  <!-- <label for="vehicle2"> I have a car</label><br> -->
                  <input type="checkbox" id="vehicle3" name="hobby" value="Running"> Running</input>
                  <!-- <label for="vehicle3"> I have a boat</label><br><br> -->
                </option>
            </div>
          </div>
        </div>

        <!-- Row 5 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="text" name="employe_code" placeholder="employe_code ">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <fieldset data-role="controlgroup">
                <legend>Choose your gender:</legend>
                <label for="Senior Manager">Senior Manager</label>
                <input type="radio" name="gender" id="Senior Manager" value="Senior Manager" checked></br>
                <label for="Associate">Associate</label>
                <input type="radio" name="gender" id="Associate" value="Associate"></br>
                <label for="Manager">Manager</label>
                <input type="radio" name="gender" id="Manager" value="Manager"></br>
                <label for="Designer">Designer</label>
                <input type="radio" name="gender" id="Designer" value="Designer"></br>
                <label for="Developer">Developer</label>
                <input type="radio" name="gender" id="Developer" value="Developer">
              </fieldset>
            </div>
          </div>
        </div>
        <!-- Row 6 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>
              <input type="number" name="salary" placeholder="employe_salary">
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>
              <input type="text" name="price" placeholder="Price" required>
            </div>
          </div>
        </div>
        <!-- Row 7 -->
        <div class="row">
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-image"></i>

            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="row">
              <i class="fas fa-rupee-sign"></i>

            </div>
          </div>
        </div>
        <!-- button -->
        <div class="row button">
          <input type="submit" value="Submit" name="submit">
        </div>

      </form>
    </div>
  </div>
  <?php require_once "bar/script.php"; ?>
</body>

</html>
