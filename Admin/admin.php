<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Controlling System for Social Harassment</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('../img/admin.jpg'); background-size: cover;">
    <header>
        <nav class="navbar navbar-expand-lg font-weight-bold" style="background-color:blue;">
            <div class="collapse navbar-collapse container" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Admin</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="./VictimMaster/modify.php">Victims</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="./VictimizerMaster/modify.php">Victimizers</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="./HelplineMaster/modify.php">Helpline </a>
                    </li>
                    <li class="nav-item active">
                        <?php
                        session_start();
                        if ($_SESSION)
                            echo  '<a class="nav-link text-white" href="../LogOut/logout.php">LogOut </a>';
                        ?>
                        
                    </li>
                </ul>
            </div>
            <?php
            if ($_SESSION)
                echo  "Hello, Welcome " . $_SESSION['name'];
            ?>
        </nav>
    </header>
</body>

</html>