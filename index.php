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

<body>
    <header>
        <div class="text-center py-4" style="background: linear-gradient(#538FFB, #5B54FA);">
            <h1 class="font-weight-bolder text-white" style="font-family: 'Reggae One', cursive;">Online Controlling
                System for Social Harassment</h1>
        </div>
        <nav class="navbar navbar-expand-lg font-weight-bold" style="background-color:lightblue;">
            <div class="collapse navbar-collapse container" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="./HelplineMaster/helplineReport.php">Helpline Details</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-white" href="./Complaint/complaintForm.php">Complaint</a>
                    </li>
                    <li class="nav-item active">
                        <?php
                        session_start();
                        if (!$_SESSION)
                            echo '<a class="nav-link text-white" href="./Login/login.php">logIn</a>';
                        else {
                            echo '<a class="nav-link text-white" href="./LogOut/logout.php">logOut</a>';
                        }
                        ?>
                </ul>
            </div>
            <?php
            if ($_SESSION)
                echo "Hello, Welcome " . $_SESSION['name'];
            ?>
        </nav>
    </header>
    <section>
        <div id="middaymealslider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/home.avif" class="d-block w-100" alt="Online Controlling System for Social
Harassment1" height="750px" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="images/2nd.jpeg" class="d-block w-100" alt="Online Controlling System for Social
Harassment2" height="750px">
                </div>
                <div class="carousel-item">
                    <img src="images/3rd.jpg" class="d-block w-100" alt="Online Controlling System for Social
Harassment3" height="750px">
                </div>
                <div class="carousel-item">
                    <img src="images/4th.jpg" class="d-block w-100" alt="Online Controlling System for Social
Harassment3" height="750px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#middaymealslider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#middaymealslider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>

    </section>
    <footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <h1 class="text-white" style="font-family: 'Reggae One', cursive;">
                            Online Controlling System for Social Harassment
                        </h1>
                        <p class="footer-info-text">

                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook">f</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter">T</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus">G+</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin">Ld</i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram">I</i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                    <i class="fa fa-map-o" aria-hidden="true"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>Patna, Bihar</h3>
                                    <p>Gandhi Maidan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="contact-info">
                                    <h3>95 XXX X XXXX</h3>
                                    <p>Give us a call</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#">About us</a>
                                    </li>
                                    <li>
                                        <a href="./HelplineMaster/helplineReport.php">Hospital Details</a>
                                    </li>
                                    <li>
                                        <a href="./FAQ/faq.html">FAQ</a>
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#">Child Improvement</a>
                                    </li>
                                    <li>
                                        <a href="#">Feedback</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                                <div class="section-heading">
                                    <h3>Subscribe</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <p class="text-white">Don’t miss to subscribe to our new feeds, kindly fill the form
                                    below.</p>
                                <form action="#">
                                    <div class="form-row">
                                        <div class="col dk-footer-form">
                                            <input type="email" class="form-control" placeholder="Email Address">
                                            <button type="submit">
                                                <i class="fa fa-send"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span>Copyright © 2022, All Rights Reserved. Developed By <strong>VISHWAJEET</strong>.
                            Under The Guidance of <strong class=“text-uppercase”>Jai Bhardhankant sir</strong>.</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-dark" title="Back to Top" style="display: block;">
                <i class="fa fa-angle-up"></i>
            </button>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <script>
        $('.carousel').carousel()
    </script>
</body>

</html>