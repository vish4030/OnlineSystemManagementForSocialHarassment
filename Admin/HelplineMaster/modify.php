<?php
error_reporting(E_ERROR | E_PARSE);
$conn = mysqli_connect('localhost', "root", "", "SocialHarassment");
//echo "Database Connected";

$p = 0;

$TxtHelplineType = $_REQUEST['TxtHelplineType'];
$TxtMobile = $_REQUEST['TxtMobile'];
$TxtWhatsapp = $_REQUEST['TxtWhatsapp'];
$TxtAddress = $_REQUEST['TxtAddress'];
$TxtCity = $_REQUEST['TxtCity'];
$TxtState = $_REQUEST['TxtState'];
$TxtCountry = $_REQUEST['TxtCountry'];
$TxtPincode = $_REQUEST['TxtPincode'];
$sch = $_REQUEST['srchval'];

//******************SAVE DATA**************//
if (isset($_REQUEST['submit1'])) {
    mysqli_query($conn, "INSERT INTO
HelplineMaster(HelplineType,Mobile,Whatsapp,Address,State,Country,Pincode,City) VALUES
('$TxtHelplineType','$TxtMobile','$TxtWhatsapp','$TxtAddress','$TxtState','$TxtCountry','$TxtPincode','$TxtCity')");
    if (mysqli_affected_rows($conn) > 0) {
        echo "<p>Data Added</p>";
    } else {
        echo "Data NOT Added<br />";
        echo mysqli_error($conn);
    }
}
// *****************DELETE****************************//
if (isset($_POST['Delete1'])) {
    $abc = "DELETE FROM HelplineMaster WHERE Mobile='$TxtMobile'";
    if ($conn->query($abc) === TRUE) {
        echo "selected record Deleted";
    } else {
        echo "Error Occured" . $conn->error;
    }
}

//*************************Search******************//
if (isset($_POST['srchval'])) {
    $query2 = "SELECT * FROM HelplineMaster WHERE Mobile = '$sch'";
    $result = mysqli_query($conn, $query2);
    while ($row1 = mysqli_fetch_array($result)) {
        $TxtHelplineType1 = $row1['HelplineType'];
        $TxtMobile1 = $row1['Mobile'];
        $Txtwhatsapp1 = $row1['Whatsapp'];
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
    $query1 = "UPDATE HelplineMaster SET
HelplineType='$TxtHelplineType', Whatsapp='$Txtwhatsapp',Address='$TxtAddress', City='$TxtCity',State='$TxtState',Country='$TxtCountry',Pincode='$TxtPincode' WHERE Mobile='$TxtMobile'";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <script>
        function inputboxvalue() {
            var x = <?php echo  $p ?>;

            if (x === 1) {
                var a = "<?php echo $TxtHelplineType1 ?>";
                var b = "<?php echo $Txtwhatsapp1 ?>";
                var c = "<?php echo $TxtAddress1 ?>";
                var d = "<?php echo $TxtMobile1 ?>";
                var e = "<?= $TxtCity1 ?>";
                var f = "<?php echo $TxtState1 ?>";
                var g = "<?php echo $TxtCountry1 ?>";
                var h = "<?php echo $TxtPincode1 ?>";


                document.form1.TxtHelplineType.value = a;
                document.form1.TxtWhatsapp.value = b;
                document.form1.TxtAddress.value = c;
                document.form1.TxtMobile.value = d;
                document.form1.TxtCity.value = e;
                document.form1.TxtState.value = f;
                document.form1.TxtCountry.value = g;
                document.form1.TxtPincode.value = h;
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
                <li class="nav-item">
                    <a class="nav-link text-white" href="./helplineReport.php">Victim Details</a>
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
                            $res = mysqli_query($conn, "SELECT Mobile FROM HelplineMaster");
                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <option><?php echo $row["Mobile"]; ?></option>
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
                            <label>Helpline Type <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtHelplineType" class="form-control" autofocus="" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Helpline Mobile <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtMobile" class="form-control" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Whatsapp No. <span style="color:#ff0000">*</span></label>
                            <input type="text" name="TxtWhatsapp" class="form-control" />
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