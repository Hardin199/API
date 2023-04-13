<?php
require('ConnectDabase.php');
if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];



    $SQL = "INSERT INTO `crud`(`name`,`age`, `password`, `emails..`, `mobile`) VALUES ('" . $Name . "','" . $Age . "', '" . $Password . "', '" . $Email . "', '" . $Mobile . "')";

    if ($SQL) {
        echo "data inserted successfully!!";
    } else {
        echo "faild";
    }
}
?>

<!doctype html>
<html lang="en">

  <style>
        #My_button {
            margin-top: 10px !important;
        }
    </style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" id="what" style="border-color: blue;" placeholder="Enter your name" name="Name" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="Email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" placeholder="Enter your age" name="Age" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="Password" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="Mobile" autocomplete="off" value=""><br>
            </div>

            <div class="form-group">
                <label>Select Gender</label>
                <select name="" id="" class="form-control">
                    <option selected disabled> </option>
                    <option value="m"> male</option>
                    <option value="f"> female</option>
            </div>
            <div class="form-group">
                <input type="submit" id="My_button" class="btn btn-primary" name="submit" value="submit" />
            </div>
        </form>
    </div>
</body>

</html>