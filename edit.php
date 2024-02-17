<?php
session_start();

require 'connection.php';

if (isset($_GET['editid'])) {
    $id = $_GET['editid'];
    $database = new database;
    $result = $database->editdepartment(['id' => $id]);
    // print_r($result);
    // return $result;
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

                <div class="form-outline mb-4 id-input" style="display: none;">
                    <input type="text" id="id" value="<?php echo $_GET['editid'] ?>" name="id" class="form-control form-control-lg" />
                    <label class="form-label">Enter User ID (for update)</label>
                </div>
                <div class="row">
                    <i class="fas fa-at"></i>
                    <input type="text" placeholder="Department Name" name="department_name" required>
                </div>
                <div class="row">
                    <i class="fas fa-at"></i>
                    <input type="text" placeholder="Department field" name="department_field" required>
                </div>


                <div class="row button">
                    <input type="submit" value="update" name="update">
                </div>

            </form>
        </div>
    </div>
    <?php require_once "bar/script.php"; ?>
</body>

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