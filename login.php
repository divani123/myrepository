<?php

session_start(); ?>

<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php');?>
<?php

//check for form submission.
if (isset($_POST['submit'])) {
	$errors=array();

	//check if the username and password has been entered.
	if (!isset($_POST['email'])||strlen(trim($_POST['email']))<1) {
		$errors[]='Username is Missing/Invalied';
	}
if (!isset($_POST['password'])||strlen(trim($_POST['password']))<1) {
		$errors[]='Password is Missing/Invalied';
	}


	//Check if there are any errors in the form.
	if (empty($errors)) {
		//save username and password into variables.
		$email=mysqli_real_escape_string($connection,$_POST['email']);
		$password=mysqli_real_escape_string($connection,$_POST['password']);
		$hashed_password=sha1($password);

		//prepare database query.
		$query="SELECT*FROM user WHERE email='{$email}' AND password='{$hashed_password}' LIMIT 1";
		$result_set=mysqli_query($connection,$query);

		verify_query($result_set) ;
//query successful
			if (mysqli_num_rows($result_set)==1) {
				//valied user found.
				$user=mysqli_fetch_assoc($result_set);
				$_SESSION ['user_id']=$user['id'];
				$_SESSION ['first_name']=$user['first_name'];

//Upadating last login.
				$query="UPDATE user SET last_login=NOW()";
				$query.="WHERE id={$_SESSION['user_id']} LIMIT 1";

$result_set=mysqli_query($connection,$query);
verify_query($result_set) ;
	

				//redirect to index.php.
				header('Location:index.html');
			}else{
				//username and password invalid.
				$errors[]='Invalied Username/Password';}
			
	
		}

	}


?>


<!DOCTYPE html>
<html>
<head>
	<title>Login-HEAITH CARE</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/main.css">
</head>
<body >
      
     
        
       

<div class="login">
		<form action="login.php" method="post">
			<fieldset>
				<legend>
					<h1>
						Log In
					</h1>
				</legend>
<?php
if (isset($errors) && !empty($errors)) {
	echo '<p class="error">Invalied Username/Password</p>';
}
?>

<?php
if (isset($_GET['logout'])) {
echo '<p class="info">You have successfully logged out from the system</p>';	
}

?>

				<p>
					<label for="" >Username:</label>
					<input type="text" name="email" id="" placeholder="Email Address">
				</p>

				<p>
					<label for="">Password:</label>
					<input type="password" name="password" id="" placeholder="Password">
				</p>

				<p>
					<button type="submit" name="submit">Log In</button>
				</p>
			</fieldset>
		</form>
	</div><!--.login--></div>
</body>
</html>

<?php
mysqli_close($connection);
?>