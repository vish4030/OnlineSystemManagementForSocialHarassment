<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Victim Master || Online Controlling System for Social Harassment</title>
    <link rel="stylesheet" href="css/style.css"> <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style_help.css">
</head>

<body style="background-image: url('../img/bg_sky.jpg'); background-size: cover;">

    <nav class="navbar navbar-expand-lg font-weight-bold" style="background-color:#538FFB;">
        <div class="collapse navbar-collapse container" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="../index.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    error_reporting(E_ERROR | E_PARSE);
    $conn = mysqli_connect('localhost', "root", "", "SocialHarassment");
   // echo "Database Connected";
    ?>
    <?php
    $query = "SELECT * FROM `HelplineMaster`";
    $result = mysqli_query($conn, $query);
    ?>
    <div class="container">
    <section class="my-5 py-5" >
        <div class="card mx-auto p-4 font-weight-bold" style="border-radius: 30px; box-shadow: 5px 10px
#713800; opacity: 0.90; background: #1B98F5;">
            <h1 class="font-weight-bold text-center mb-4" style="color: #120E43; font-family: 'Reggae One',
cursive;">Report Helpline</h1>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="" style="background: #120E43; color: white;">
                        <tr>
                            <th scope="col">Helpline Type</th>
                            <th scope="col">Helpline Mobile</th>
                            <th scope="col">Helpline Whatsapp</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
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
                                <td><?php echo $row["HelplineType"]; ?></td>
                                <td><?php echo $row["Mobile"]; ?></td>
                                <td><?php echo $row["whatsapp"]; ?></td>
                                <td><?php echo $row["Address"]; ?></td>
                                <td><?php echo $row["City"]; ?></td>
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
        </div>
    </section>
    </div>
</body>

</html>