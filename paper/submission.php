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
                            <li class="active"><a href="../paper/submission.php">Paper Submission</a></li>
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
        <h1>Paper Sumbission</h1><br>
        <div class="row">
            <div class="col-md-8">
                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in ante lacinia, dapibus massa ac, sodales ex. Cras pulvinar turpis eu est porttitor, id facilisis mi iaculis. Aenean libero neque, imperdiet eu malesuada id, suscipit nec nulla. Nulla porta, eros luctus porttitor aliquam, arcu diam ornare tellus, in accumsan tellus tellus eget libero. Phasellus viverra tristique turpis eu scelerisque. Sed enim odio, imperdiet eget est in, facilisis efficitur sapien. Nunc id suscipit augue, sit amet ullamcorper felis. Proin dictum lobortis mi. Praesent at lorem scelerisque, efficitur dolor rutrum, mollis nisl. Sed tortor nisi, molestie in leo ac, ornare sollicitudin leo.<br><br>Vivamus ut porttitor magna. Cras aliquet interdum dui, quis finibus lorem ornare eu. Fusce in tincidunt lectus. Quisque suscipit hendrerit purus. Aliquam elementum fringilla tincidunt. Vivamus maximus cursus nisl id interdum. Duis ultrices eros eu posuere auctor. Phasellus molestie commodo erat sed interdum. Maecenas condimentum non enim finibus lobortis</p>
                <form action="../php/FileUpload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
                    <label for="UploadFileField"></label>
                    <input type="file" name="UploadFileField" id="UploadFileField"/>
                    <input type="submit" name="UploadButton" id="UploadButton" value="Upload">
                </form>
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