<?php
error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect('localhost', "root", "", "SocialHarassment");
//echo "Database Connected";

$TxtFullName = $_REQUEST['TxtFullName'];
$TxtFatherName = $_REQUEST['TxtFatherName'];
$TxtAge = $_REQUEST['TxtAge'];
$Gender = $_REQUEST['rb'];
$TxtMobile = $_REQUEST['TxtMobile'];
$TxtEmail = $_REQUEST['TxtEmail'];
$TxtAddress = $_REQUEST['TxtAddress'];
$TxtCity = $_REQUEST['TxtCity'];
$TxtState = $_REQUEST['TxtState'];
$TxtCountry = $_REQUEST['TxtCountry'];
$TxtPincode = $_REQUEST['TxtPincode'];
$TxtPassword = $_REQUEST['TxtPassword'];
$TxtUser = "user";

if (isset($_POST['register'])) {
    mysqli_query($conn, "INSERT INTO VictimMaster(FullName, FatherName,Age,Gender,Mobile,Email,Address,State,Country,Pincode,City) VALUES
    ('$TxtFullName','$TxtFatherName','$TxtAge','$Gender','$TxtMobile','$TxtEmail','$TxtAddress','$TxtState','$TxtCountry','$TxtPincode',$TxtCity)");

    mysqli_query($conn, "INSERT INTO user(Email, Passwords,UserType)Values('$TxtEmail','$TxtPassword','$TxtUser')");

    if (mysqli_affected_rows($conn) > 0) {
        echo "<p>Data Added</p>";
        header("Location:../Login/login.php");
    } else {
        echo "Data NOT Added<br />";
        echo mysqli_error($conn);
    }
}

?>











<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victim Master || Online Controlling System for Social Harassment</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style_signup.css">
</head>

<body oncontextmenu="return false">

    <nav class="navbar navbar-expand-lg font-weight-bold" style="background-color:#538FFB;">
        <div class="collapse navbar-collapse container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../Login/login.php">LOGIN</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="my-5 py-5">
        <form name="form1" method="post" action="">

            <div class="card mx-auto p-4 font-weight-bold" style="border-radius: 30px; box-shadow: 5px 10px
             #d20172; width: 550px; opacity: 0.90; background: linear-gradient(#E1A2B8, #9F2BC1);">
                <h1 class="font-weight-bold text-center mb-4" style="color: #4c1800; font-family: 'Reggae One',
                   cursive;">SignUp</h1>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Full Name <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtFullName" class="form-control" autofocus="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Father's Name <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtFatherName" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Age <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtAge" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Gender<span style="color:#ff0000">*</span></label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rb" id="male" value="Male">
                                <label class=" form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rb" id="female" value="Female">
                                <label class=" form-check-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="rb" id="other" value="Other">
                                <label class=" form-check-label" for="other">Other</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mobile <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtMobile" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtEmail" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtAddress" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtCity" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>State <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtState" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country <span style="color:#ff0000">*</span></label>
                            <select class="custom-select" name="TxtCountry">
                                <option>Select Your Country</option>
                                <option value="India">India</option>
                                <option value="Nepal">Nepal</option>
                                <option value="China">China</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="">Russia</option>
                                <option value="Russia">USA</option>
                                <option value="US">US</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Pincode <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtPincode" class="form-control" " />
                        </div>
                    </div>
                    <div class=" col-md-6">
                            <div class="form-group">
                                <label>Password <span style="color:#ff0000">*</span></label>
                                <input type="text" name="TxtPassword" class="form-control" " />
                        </div>
                    </div>
                </div>
                <div class=" row ">
                <div class=" form-group">
                                <input type="submit" class="btn btn-primary" name="register" id="rg" value="Register" />
                            </div>
                        </div>
                    </div>
        </form>
    </section>
</body>

</html>