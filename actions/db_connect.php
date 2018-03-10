
<?php

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cr14_lorand_kovacs_bigevents";


// create connection
$connect = new mysqli($localhost, $username, $password, $dbname);

// check connection
if($connect->connect_error) {

    die("connection failed: " . $connect->connect_error);

} else {

    // echo "Successfully Connected";

}
?>