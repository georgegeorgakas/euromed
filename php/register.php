<?php
    session_start();

    //connecto to database
    $db = mysqli_connect("localhost", "root", "", "euromed");

    if (isset($_POST['register_btn'])) {
        $firstname = mysql_real_escape_string($_POST['firstname']);
        $lastname = mysql_real_escape_string($_POST['lastname']);
        $email = mysql_real_escape_string($_POST['email']);
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['password']);
        $password2 = mysql_real_escape_string($_POST['password2']);
        $position = mysql_real_escape_string($_POST['position']);
        $country = mysql_real_escape_string($_POST['country']);
        $payment = mysql_real_escape_string($_POST['payment']);

        if ($password == $password2) {
            //create user
            $password = md5($password); //hash before storing for security purposes
            $sql = "INSERT INTO users(firstname, lastname, email, username, password, position, country, payment) VALUES('$firstname', '$lastname', '$email', '$username', '$password', '$position', '$country', '$payment')";
            mysqli_query($db, $sql);
            $_SESSION['message'] = "You are now logged in";
            $_SESSION['username'] = $username;
            header("location: ../index/index.php"); //redirect to home page
        }else{
            $_SESSION['message'] = "The two passwords do not match";
            header("location: ../registration/registration_form.php");
        }
    }
?>