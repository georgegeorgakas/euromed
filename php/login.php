<?php
	session_start();

	//connect to database
	$db = mysqli_connect("localhost", "root", "", "euromed");

	if (isset($_POST['login_btn'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		$password = md5($password); //we hashed password before storing last time
		$sql = "SELECT * FROM users WHERE username = '$username' AND password= '$password'";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION["loggedIn"] = true;
			$_SESSION['username'] = $username;
			header("location: ../index/index.php"); //redirect to home page
		} else {
			$_SESSION['message'] = "Username/password combination incorrect";
		}
	}
?>