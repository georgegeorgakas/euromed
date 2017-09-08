<?php

    if (isset($_POST['update'])) {
        $connect = mysqli_connect("localhost", "root", "", "euromed");
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $country = $_POST['country'];
        $username = $_POST['username'];
        $query1 = "UPDATE `users` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `country` = '$country' WHERE `users`.`username` = '$username';";
        $result = mysqli_query($connect,$query1);
        if($result){
            echo "Data Updated..";
            header("location: ../index/index.php");
        }else{
            echo "Data not updated";
            header("location: ../index/account.php");
        }
    }
?>