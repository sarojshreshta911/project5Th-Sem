<?php
session_start();
require 'database.php';

$title = "Home";
$heading = "Home";
require_once '/source/header.php';
require_once '/source/jumbotron.php';

if (isset($_SESSION['user_id'])) {
$user = $_SESSION['user_id'];
}


$records1 = $conn->prepare('SELECT * FROM test_date order by id desc limit 1');
$records1->execute();
$results1 = $records1->fetch(PDO::FETCH_ASSOC);

$noOfUnit = $results1['noOfUnit'];
$costPerUnit = $results1['costPerUnit'];
$totalCost = $results1['totalCost'];
$costPerPulse = $results1['costPerPulse'];
$currentCount = $results1['currentCount'];
$lastUnitCount = $results1['lastUnit'];
$nextUnitCount = $results1['nextUnitCount'];
$impkWH = $results1['impkWH'];
?>  

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sensor 1</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"> <?= $_SESSION['user_id'] ?></span></a></li>
            <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span></a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"> </span></a></li>            
        </ul>

    </div>
</nav>

<div class="well well-lg">
    <div class="table-responsive">
        <h3>Summary</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>No of unit</th>
                        <th>Cost per Unit</th>
                        <th>Total Cost</th>
                        <th>Cost Per Pulse</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?= $noOfUnit ?></td>
                        <td><?= $costPerUnit ?></td>
                        <td><?= $totalCost ?></td>
                        <td><?= $costPerPulse ?></td>
                    </tr>
                </tbody>

                <thead>
                    <tr>
                        <th>Current count</th>
                        <th>Last Unit Count</th>
                        <th>Next Unit Count</th>
                        <th>IMP/kWH</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><?= $currentCount ?></td>
                        <td><?= $lastUnitCount ?></td>
                        <td><?= $nextUnitCount ?></td>
                        <td><?= $impkWH ?></td>
                    </tr>
                </tbody>
            </table>       

            <h3>Activity</h3>
            <table class="table">                
                <thead>
                    <tr>
                        <th>Count</th>
                        <th>Time Stamp </th>
                        <th>MinValue</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $record2 = $conn->prepare('SELECT * from activity order by id desc limit 3');
                    $record2->execute();

                    foreach ($record2 as $value){
                    $timeStamp = $value['timeStamp'];
                    $minValue = $value['minValue'];
                    $count = $value['count'];
                    ?>
                    <tr>
                        <td><?= $count ?></td>
                        <td><?= $timeStamp ?></td>
                        <td><?= $minValue ?></td>                        
                    </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>


    </div>



</div>

<a href="homepage.php"><button class="btn btn-default">homepage page</button></a>

<?php require_once '/source/footer.php'; ?>