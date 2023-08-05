<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Victim Master || Online Controlling System for Social Harassment</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css"> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <script>
        function abc() {
            window.print();
        }
    </script>
</head>

<body style="background-image: url('images/bg4.jpg'); background-size: cover;">

    <nav class="navbar navbar-expand-lg font-weight-bold" style="background-color:aliceblue;">
        <div class="collapse navbar-collapse container" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link text-white" href="../admin.php">Admin Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="./modify.php">Modify</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $conn = mysqli_connect('localhost', "root", "", "SocialHarassment");
    //echo "Database Connected";
    ?>
    <?php
    $query = "SELECT * FROM `VictimMaster`";
    $result = mysqli_query($conn, $query);
    ?>
    <section class="my-5 py-5">
        <div class="card mx-auto p-4 font-weight-bold" style="border-radius: 30px; box-shadow: 5px 10px
#713800; opacity: 0.90; background: #1B98F5;">
            <h1 class="font-weight-bold text-center mb-4" style="color: #120E43; font-family: 'Reggae One',
cursive;">Report Victim Master</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="" style="background: #120E43; color: white;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                            <th scope="col">Pincode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row["id"]; ?></th>
                                <td><?php echo $row["FullName"]; ?></td>
                                <td><?php echo $row["Gender"]; ?></td>
                                <td><?php echo $row["Mobile"]; ?></td>
                                <td><?php echo $row["Email"]; ?></td>
                                <td><?php echo $row["Address"]; ?></td>
                                <td><?php echo $row["State"]; ?></td>
                                <td><?php echo $row["Country"]; ?></td>
                                <td><?php echo $row["Pincode"]; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <button class="btn badge-pill" type="button" onclick="abc()" style="font-size:25px; border:0px;
background: #120E43; color: white; font-family: 'Reggae One', cursive;">Print</button>
        </div>
    </section>
</body>

</html>