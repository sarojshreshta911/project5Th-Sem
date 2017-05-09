<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$title = "Registration";
$heading = "Registration Page";
require_once '/source/header.php';
require 'database.php';
$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])):

    // Enter the new user in the database

    $sql = "INSERT INTO user (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));

    if ($stmt->execute()):
        $message = ('Successfully created new user');
    else:
        $message = ('Sorry there must have been an issue creating your account');
    endif;

endif;
?>

<div>
    <?php
    require_once '/source/jumbotron.php';
    if (!empty($message)):
        ?>
        <h3 class="text-center"><?= $message ?></h3>
    <?php endif; ?>

    <form class="form-horizontal" method="POST" >
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter email" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-10"> 
                <input name="password" type="password" class="form-control" id="pwd" placeholder="Enter password" required >
            </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>
    </form>

    <div class ="text-center">
        <a href="index.php">
            <button type="button" class="btn btn-primary btn-block">Login</button> 
        </a>
    </div>
</div>

<?php require_once '/source/footer.php' ?>