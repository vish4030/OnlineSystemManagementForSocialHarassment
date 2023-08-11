<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect('localhost', "root", "", "SocialHarassment");
//echo "Database Connected";

$Email = $_REQUEST['Email'];
$pwd = $_REQUEST['Password'];

// search user
if (isset($_POST['submit'])) {
    $query = "SELECT * FROM user WHERE Email='$Email' AND Passwords='$pwd'";

    $result = mysqli_query($conn, $query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $userType = $row["UserType"];
        $name = $row["Name"];
    } else {
        echo "No results found.";
    }


    if ($conn->query($query) == TRUE) {
        echo ("Record Searched successfully");
    } else {
        echo "Error During record Searching: " . $conn->error;
    }



    if ($userType == 'user') {
        $_SESSION['name'] = $name;
        header("Location:../index.php");
    } else if ($userType == 'admin') {
        $_SESSION['name'] = $name;
        header("Location:../Admin/admin.php");
    }
}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victim Master || Online Controlling System for Social Harassment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="login container">
        <div class="greeting">
            <h1>Welcome to Login Page</h1>
        </div>
        <form name="form1" method="post" action="">

            <div class="card mx-auto p-4 font-weight-bold form-div">
                <h1 class="font-weight-bold text-center mb-4" style="color: #4c1800; font-family: 'Reggae One',
       cursive;">Login</h1>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="Password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <a href="../SignUp/signup.php">SignUp</a>
            </div>
        </form>
    </div>


</body>

</html>