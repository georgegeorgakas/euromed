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
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Venue
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../venue/venue_details.php">Venue Details</a></li>
                            <li><a href="../venue/accomodation.php">Accomodation</a></li>
                        </ul>
                    </li>
                    <li><a href="../exhibition/exhibitors.php">Exhibition</a></li>
                    <li class="active"><a href="sponsors.php">Sponsors</a></li>
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
        <h1>Sponsors</h1><br><br>
        <div class="row">
            <div class="col-md-4"><img class="image" style="margin-top: 50px;" src="../pic_sponsors/axigen.png"></div>
            <div class="col-md-4"><p style="text-align: center; margin-top: 50px;"><b style="color: black;">Axigen (Gold Sponsor)</b><br><a target="_blank" href="https://www.axigen.com/"><b style="color: black;"><u>(http://www.axigen.com)</u></b></a></p></div>
            <div class="col-md-4"><p style="text-align: right; text-align: top;"><b><big> Axigen Messaging SRL</big></b><br>Address:<br>61C Nicolae Caramfil Str., building B,<br>first floor Entrance from Școala Herăstrău 014142 Bucharest 1, Romania<br>US: +1 (773) 598 5800<br>UK: +44 (0) 207 193 2470<br>Headquarters: +40 21 303 2080<br>Email.: sales@axigen.com</p></div>
        </div>
        <div class="row">
            <div class="col-md-4"><img class="image" style="margin-top: 50px; width: 200px;" src="../pic_sponsors/cablenet.gif"></div>
            <div class="col-md-4"><p style="text-align: center; margin-top: 50px;"><b style="color: black;">CABLENET (Platinum Sponsor)
            </b><br><a target="_blank" href="http://www.cablenet.com.cy"><b style="color: black;"><u>(http://www.cablenet.com.cy</u></b></a></p></div>
            <div class="col-md-4"><p style="text-align: right; text-align: top;"><br><b><big>Cablenet Communication Systems Ltd.</big></b><br>Corporate Services Sales Dep’t<br>Address: Nimeli Court, 3rd floor, Block A,<br> 41-49 Ay. Nicolaou street, Engomi 2408,<br>Nicosia, Cyprus<br>Tel.: +357 22 399499<br>Fax.: +357 22 399566<br>Email.: corporatesales@cablenetcy.net</p></div>
        </div>
        <div class="row">
            <div class="col-md-4"><img class="image" style="margin-top: 50px;" src="../pic_sponsors/interlease.png"></div>
            <div class="col-md-4"><p style="text-align: center; margin-top: 50px;"><b style="color: black;">INTERLEASE DSA A.E.<br>(Platinum Sponsor)</b><br><a target="_blank" href="http://www.dsahellas.gr"><b style="color: black;"><u>(http://www.dsahellas.gr)</u></b></a></p></div>
            <div class="col-md-4"><p style="text-align: right; text-align: top;"><br><br><b><big>INTERLEASE DSA A.E.</big></b><br>Leoforos Vouliagmenis<br>107 Glyfada,<br>16674, Greece<br><br>Tel: +30 210.89.39.060<br>Fax: +30210.89.39.064</p></div>
        </div>
        <div class="row">
            <div class="col-md-4"><img class="image" style="margin-top: 50px; width: 200px; height: 200px;" src="../pic_sponsors/PhotoScan.jpg"></div>
            <div class="col-md-4"><p style="text-align: center; margin-top: 50px;"><b style="color: black;">Agisoft LLC<br>(Platinum Sponsor)</b><br><a target="_blank" href="http://www.agisoft.com"><b style="color: black;"><u>(http://www.agisoft.com)</u></b></a></p></div>
            <div class="col-md-4"><p style="text-align: right; text-align: top;"><br><br><b><big>Agisoft LLC</big></b><br>11 Degtyarniy per.,<br>St. Petersburg,<br>Russia, 191144<br>Tel: +7 (812) 621-33-41<br>Email: info@agisoft.com</p></div>
        </div>
        <div class="row">
            <div class="col-md-4"><img class="image" style="margin-top: 50px;" src="../pic_sponsors/rpf.jpg"></div>
            <div class="col-md-4"><p style="text-align: center; margin-top: 70px;"><b style="color: black;">Research Promotion Foundation<br>(Platinum Sponsor)</b><br><a target="_blank" href="https://www.research.org.cy/"><b style="color: black;"><u>(https://www.research.org.cy/)</u></b></a></p></div>
            <div class="col-md-4"><p style="text-align: right; text-align: top;"><b><big>Research Promotion Foundation</big></b><br>Λεωφόρος Στρόβολου 123<br>2042 Λευκωσία, Κύπρος<br>Τ.Θ. 23422, 1683 Λευκωσία<br>Tel: +357 22205000<br>FAX: +357 22205001<br>Email: ipe@research.org.cy</p></div>
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