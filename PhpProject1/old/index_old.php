<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>        
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">       
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    
                    <div class ="jumbotron">
                        <h1 class="text-center">Login Page</h1>
                    </div>
                                        
                    <form class="form-horizontal" method = "POST">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="username">User Name:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="User Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Password:</label>
                            <div class="col-sm-10"> 
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                            </div>
                        </div>
                        
                        <div class="form-group"> 
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                                        
                    <div class ="text-center">
                        <a href="register.php">
                            <button type="button" class="btn btn-primary btn-block">Register</button> 
                        </a><br>
                        <a href="test.php">
                            <button type="button" class="btn btn-primary btn-block">Test</button> 
                        </a><br>
                        <a href="index2.php">
                            <button type="button" class="btn btn-primary btn-block">INDEX2</button> 
                        </a>                        
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <?php
        // put your code here       
        ?>
    </body>
</html>
