<?php
error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect('localhost', "root", "", "SocialHarassment");
//echo "Database Connected";

$p = 0;

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
$sch = $_REQUEST['srchval'];

//******************SAVE DATA**************//
if (isset($_REQUEST['submit1'])) {
    mysqli_query($conn, "INSERT INTO
VictimMaster(FullName, FatherName,Age,Gender,Mobile,Email,Address,State,Country,Pincode) VALUES
('$TxtFullName','$TxtFatherName','$TxtAge','$Gender','$TxtMobile','$TxtEmail','$TxtAddress','$TxtState','$TxtCountry','$TxtPincode')");
    if (mysqli_affected_rows($conn) > 0) {
        echo "<p>Data Added</p>";
    } else {
        echo "Data NOT Added<br />";
        echo mysqli_error($conn);
    }
}
// *****************DELETE****************************//
if (isset($_POST['Delete1'])) {
    $abc = "DELETE FROM VictimMaster WHERE Email='$TxtEmail'";
    if ($conn->query($abc) === TRUE) {
        echo "selected record Deleted";
    } else {
        echo "Error Occured" . $conn->error;
    }
}

//*************************Search******************//
if (isset($_POST['srchval'])) {
    $query2 = "SELECT * FROM VictimMaster WHERE Email = '$sch'";
    $result = mysqli_query($conn, $query2);
    while ($row1 = mysqli_fetch_array($result)) {
        $TxtFullName1 = $row1['FullName'];
        $TxtFatherName1 = $row1['FatherName'];
        $TxtAge1  = $row1['Age'];
        $Gender1 = $row1['Gender'];
        $TxtMobile1 = $row1['Mobile'];
        $TxtEmail1 = $row1['Email'];
        $TxtAddress1 = $row1['Address'];
        $TxtState1 = $row1['State'];
        $TxtCity1 = $row1['City'];
        $TxtCountry1 = $row1['Country'];
        $TxtPincode1 = $row1['Pincode'];

        global $p;
        $p = 1;
    }
    if ($conn->query($query2) == TRUE) {
        echo ("Record Searched successfully");
    } else {
        echo "Error During record Searching: " . $conn->error;
    }
}


//***************** UPDATE *************************//
if (isset($_POST['Update1'])) {
    $query1 = "UPDATE VictimMaster SET
FullName='$TxtFullName',FatherName='$TxtFatherName', Age='$TxtAge',Gender='$Gender',Mobile='$TxtMobile',Address='$TxtAddress', City='$TxtCity',State='$TxtState',Country='$TxtCountry',Pincode='$TxtPincode' WHERE Email='$TxtEmail'";
    if ($conn->query($query1) === TRUE) {
        echo "RECORD UPDATED SUCCESSFULLY";
    } else {
        echo "error updated record:" . $conn->error;
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <script>
        function inputboxvalue() {
            var x = <?php echo  $p ?>;

            if (x === 1) {
                var a = "<?php echo $TxtFullName1 ?>";
                var b = "<?= $TxtFatherName1 ?>";
                var c = "<?php echo $TxtEmail1 ?>";
                var d = "<?php echo $TxtAddress1 ?>";
                var e = "<?php echo $TxtMobile1 ?>";
                var f = "<?php echo $Gender1 ?>";
                var g = "<?= $TxtCity1 ?>";
                var h = "<?php echo $TxtState1 ?>";
                var i = "<?php echo $TxtCountry1 ?>";
                var j = "<?php echo $TxtPincode1 ?>";
                var k = "<?= $TxtAge1 ?>";

                console.log(g, h);



                if (f.trim() === "Male")
                    document.getElementById("male").checked = true;
                if (f.trim() === "Female")
                    document.getElementById("female").checked = true;


                document.form1.TxtFullName.value = a;
                document.form1.TxtFatherName.value = b;
                document.form1.TxtAge.value = k;
                document.form1.TxtEmail.value = c;
                document.form1.TxtAddress.value = d;
                document.form1.TxtMobile.value = e;
                document.form1.TxtCity.value = g;
                document.form1.TxtState.value = h;
                document.form1.TxtCountry.value = i;
                document.form1.TxtPincode.value = j;
            }
        }
    </script>
</head>

<body oncontextmenu="return false" onload="inputboxvalue()">
    <nav class="navbar navbar-expand-lg font-weight-bold" style="background-color:blue;">
        <div class="collapse navbar-collapse container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="../admin.php">Admin Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-white" href="./victim.php">Victim Details</a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="my-5 py-5">
        <form name="form1" method="post" action="">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <select name="srchval" id="fn" class="custom-select">
                            <option>Select Email Address</option>
                            <?php
                            $res = mysqli_query($conn, "SELECT Email FROM VictimMaster");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <option><?php echo $row["Email"]; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <button>GET VALUE</button>
                    </div>
                </div>
            </div>

            <div class="card mx-auto p-4 font-weight-bold" style="border-radius: 30px; box-shadow: 5px 10px
#d20172; width: 550px; opacity: 0.90; background: linear-gradient(#E1A2B8, #9F2BC1);">
                <h1 class="font-weight-bold text-center mb-4" style="color: #4c1800; font-family: 'Reggae One',
cursive;">Victim Master</h1>
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
                </div>
                <div class=" row my-4">
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-success btn-block badge-pill" name="submit1" id="SendId">Register</button>
                            </div>
                            <div class="col-md-3">
                                <button type="reset" class="btn btn-warning btn-block badge-pill">Reset</button>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-block badge-pill" name="Update1" id="SendId">Update</button>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-danger btn-block badge-pill" name="Delete1" id="SendId">Delete</button>
                            </div>
                        </div>
                    </div>
        </form>
    </section>
</body>

</html>