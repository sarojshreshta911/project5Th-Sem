<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$title = "Index";
$heading = "Login Page";
require_once '/source/header.php';
require_once '/source/jumbotron.php';

session_start();
require 'database.php';

if( isset($_SESSION['user_id']) ){
	header("Location: /PhpProject1/homepage.php");
}


if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM user WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];             
		header("Location: /PhpProject1/homepage.php");

	} else {
		$message = 'Sorry, invalid Email or Password.';
	}

endif;
?>
<form class="form-horizontal" method = "POST">
    <?php if(!empty($message)): ?>
		<h3 class="text-center text-danger"><?= $message ?></h3>
	<?php endif; ?>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Enter  Email:</label>
        <div class="col-sm-10">
            <input name="email" type="text" class="form-control" id="email" placeholder="Email" required>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10"> 
            <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" required>
        </div>
    </div>

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>

    <div class ="text-center">
        <a href="register.php">
            <button type="button" class="btn btn-primary btn-block">Register</button> 
        </a>
    </div>
</form>

<?php require_once '/source/footer.php'; ?>