<?php
session_start();
require_once("includes/init.php");




//if ($session->is_signed_in()) {
//
//	redirect("index.php");
//
//}
header('HTTP/1.1 401 Unauthorized', true, 401);


if (isset($_POST['submit'])) {
	
$username = trim($_POST['username']);
$password = trim($_POST['password']);

    header('HTTP/1.1 401 Unauthorized', true, 401);


/// Method to check database user

$user_found = User::verify_user($username, $password);


	if ($user_found) {
	    $_SESSION['signed_in'] = true;

//		$session->login($user_found);
    	header('Location: index.php');

	} else {

	$the_message = "Your password or username are incorrect"; 
	echo $the_message;
        header('HTTP/1.1 401 Unauthorized', true, 401);

	}

	}

foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n" . "<br>" ;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


<form action="" method="post">


<div class="form-group">
<label for="username">Username</label>
<input type="text" class="form-control" name="username">
</div>

<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="password">
</div>

<div class="form-group">
<input type="submit" value="Submit" name="submit">
</div>


</form>


</body> 
</html>