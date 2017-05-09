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
?>  

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Sensor 1</a>
        </div>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"> <?= $user ?></span></a></li>
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
                        <td>23</td>
                        <td>15</td>
                        <td>345</td>
                        <td>0.22</td>
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
                        <td>223123</td>
                        <td>211235</td>
                        <td>344323</td>
                        <td>3200</td>
                    </tr>
                </tbody>
            </table>       

            <h3>Activity</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Time Stamp</th>
                        <th>MinValue </th>
                        <th>Count</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2017-02-10 23:15:38</td>
                        <td>980</td>
                        <td>138212</td>
                    </tr>
                    <tr>
                        <td>2017-02-10 23:15:34</td>
                        <td>929</td>
                        <td>138211</td>
                    </tr>
                    <tr>
                        <td>2017-02-10 23:15:30</td>
                        <td>938</td>
                        <td>138210</td>
                    </tr>
                </tbody>

            </table>
        </div>


    </div>



</div>

<?php require_once '/source/footer.php'; ?>