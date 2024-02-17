<?php
session_start();

require "connection.php";
$gemploye = $database->getemploye();

// print_r("<pre>");
// print_r($gemploye);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            background-image: url('https://images.pexels.com/photos/1420440/pexels-photo-1420440.jpeg?auto=compress&cs=tinysrgb&w=600');
        }
    </style>
</head>

<body>
    <!-- <h1 style="color: white;">Users Panel</h1> -->
    <?php require_once "bar/upperbar.php" ?>

    <div>
        <table class="table table-green" style="width: 80%;
    margin: 70px auto;
    background-color: white;
    border-radius: 4px;">

            <thead>
                <tr>
                    <th scope="col">Employe Name</th>
                    <th scope="col">Employe Fields</th>
                    <th scope="col">Department_name</th>
                    <th scope="col">email</th>
                    <th scope="col">address</th>
                    <th scope="col">hobby</th>
                    <th scope="col">employe_code</th>
                    <th scope="col">designation</th>
                    <th scope="col">employe_salary</th>
                    <th scope="col">passing_year</th>
                    <th scope="col">course</th>
                    <th scope="col">university</th>
                    <th scope="col">percentage</th>
                    <th scope="col">picture</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($gemploye as $data) {
                    echo "<tr>";
                    echo "<td>" . $data['employe_name']    . "</td>";
                    echo "<td>" . $data['employe_fields']    . "</td>";
                    echo "<td>" . $data['department_name']    . "</td>";
                    echo "<td>" . $data['email']    . "</td>";
                    echo "<td>" . $data['address']    . "</td>";
                    echo "<td>" . $data['hobby']    . "</td>";
                    echo "<td>" . $data['employe_code']    . "</td>";
                    echo "<td>" . $data['designation']    . "</td>";
                    echo "<td>" . $data['employe_salary']    . "</td>";
                    echo "<td>" . $data['passing_year']    . "</td>";
                    echo "<td>" . $data['course']    . "</td>";
                    echo "<td>" . $data['university']    . "</td>";
                    echo "<td>" . $data['percentage']    . "</td>";
                    echo "<td>" . $data['picture']    . "</td>";
                    echo "<td><button class='btn btn-warning' onclick=\"window.location.href='d_edit.php?editid=" . $data['id'] . "'\">edit</button></td>";
                    echo "<td><button class='btn btn-danger' onclick=\"window.location.href='e_delete.php?deleteid=" . $data['id'] . "'\">Delete</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>