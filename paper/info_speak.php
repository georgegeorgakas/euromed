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
                    <li class="active" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Paper
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../paper/submission.php">Paper Submission</a></li>
                            <li class="active"><a href="../paper/info_speak.php">Info for Speakers</a></li>
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
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Venue
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../venue/venue_details.php">Venue Details</a></li>
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
        <h1>Info for speakers</h1>
        <div class="row">
            <div class="col-md-12">
                <h2>Full papers</h2>
                <p>
                    Authors of accepted full papers will have to give a 25 minute oral presentation (including 5-10 minutes for questions from the audience).
                    Please present yourself to the Session Chair well before your session start.
                    Authors slides will be presented via a video projector (see details below).
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Short/Project Papers</h2>
                <p>
                    Authors of accepted SHORT and PROJECT papers will be required to do a short presentation (15 minutes net time). Project Paper presentations will have a duration of 15 minutes long. Short Paper presentations will have a duration of 10 minutes long. Moreover, there will be an opportunity for informal questions and discussion during the dedicated Short Paper posters breaks. Each SHORT paper will be also presented in a poster session (during the coffee break following oral presentation). It is therefore a REQUIREMENT for publication that you prepare both a short oral presentation and a poster of your short paper for display. The exact lay out of the poster is at your discretion but the poster should be of A0 size and preferably laminated (Guidelines). If you have any queries regarding these final requirements, feel free to contact us.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h2>Audio Visual Equipment</h2>
                <p>
                    Conference presentation rooms will be equiped with:<br>
                    <ul>
                        <li>Large Screen and video projector</li>
                        <li>Projectors in the General Session have a maximal resolution of 1280x1024 with a native resolution of 1024x768</li>
                        <li>Switched connections for portable laptops.</li>
                        <li>Standalone Windows 7, Windows 8, Windows 10 (with Internet connection) with:<br>
                            <ul>
                                <li>Microsoft Office 2010/2013</li>
                                <li>CD-ROM/DVD drive.</li>
                                <li>Medium quality accelerated 3D graphics.</li>
                                <li>USB2/USB3 ports</li>
                            </ul>
                        </li>
                    </ul>
                </p>
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