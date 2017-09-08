<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>World Cultural Heritage</title>
    <link rel="stylesheet" type="text/css" href="../css/file.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #f4e3cb">
    <div class="container">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="../index/index.php">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Programe
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../programe/keynotes.php">Keynotes</a></li>
                            <li><a href="../programe/day1.php">Day 1</a></li>
                            <li><a href="../programe/day2.php">Day 2</a></li>
                            <li><a href="../programe/day3.php">Day 3</a></li>
                            <li><a href="../programe/day4.php">Day 4</a></li>
                            <li><a href="../programe/day5.php">Day 5</a></li>
                            <li><a href="../programe/day6.php">Day 6</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paper
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../paper/submission.php">Paper Submission</a></li>
                            <li><a href="../paper/info_speak.php">Info for Speakers</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../registration/registration_info.php">Registration info</a></li>
                            <li><a href="../registration/registration_form.php">Registration form</a></li>
                        </ul>
                    </li>
                    <li class="active" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Venue
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a href="../venue/venue_details.php">Venue Details</a></li>
                            <li><a href="../venue/accomodation.php">Accomodation</a></li>
                        </ul>
                    </li>
                    <li><a href="../exhibition/exhibitors.php">Exhibition</a></li>
                    <li><a href="../sponsors/sponsors.php">Sponsors</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) : ?>
                        <li><a href="../index/account.php">Welcome <?php echo $_SESSION['username'];?>,</a></li>
                        <li><a href="../php/logout.php">Logout </a></li>
                    <?php else : ?>
                        <li><a href="../index/login_page.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <h1>Conference Venue</h1>
        <div class="row">
            <div class="col-md-12">
                <h2>Filoxenia Conference Center</h2>
                <p>
                    ”Filoxenia” is a cherished concept in Cyprus, one that has deep roots and a rich cultural heritage.<br><br>Hospitality, the official English translation of ‘Filoxenia', doesn't do justice to the concept as it does not encompass its main element, which is generosity of spirit. What is certain is that it is one of the attributes of the Cypriot character and culture that we take pride in.<br><br>True to its name, the Filoxenia Conference Centrewas completely renovated to welcome guests from all over Europe during the Cypriot Presidency of the EU in 2012. Now it’s a modern conference facility, which hosts a wide range of events and honor the timeless tradition of Cypriot hospitality.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img class="image" src="../pic/venue.png" alt="venue photo">
                <a target="_blank" href="http://www.fcc.com.cy/"><p style="text-align: center;">ww.fcc.com.cy</p></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p>
                    The Filoxenia Conference Centre is conveniently located, with easy access to the highway and central roads of Nicosia. If you are located in Nicosia, you can reach the center via bus. Filoxenia Conference Centre is completely wheelchair accessible and is fully equipped to accommodate people with special access needs.<br><br>
                    If you are traveling via car, a large parking space outside the Centre provides easy access to the venue. A parking space for approximately 70 vehicles is also available within the Centre’s premises.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe class="image" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.0775131260048!2d33.377292015098924!3d35.154687566275996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14de19d8fc1e4653%3A0xf05682dab61e0173!2zzqPPhc69zrXOtM-BzrnOsc66z4wgzprOrc69z4TPgc6_IM6mzrnOu86_zr7Otc69zq_OsQ!5e0!3m2!1sel!2sus!4v1484264167515" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><br>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    <a target="_blank" href="https://www.facebook.com/EuroMed2016-666633476791951/"><img src="../pic/f1-2.png" alt="fb logo"></a>
                    <a target="_blank" href="https://twitter.com/EuroMed2016"><img src="../pic/f2-2.png" alt="twitter logo"></a>
                    <p>World Cultural Heritage Conference 2016 - Euromed 2016 - International Conference on Cultural Heritage Documentation, Preservation and Protection.</p>
                    <p>All rights reserved.  © 2017</p>
                </footer>
            </div>
        </div>
</body>
</html>