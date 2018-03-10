<?php

require_once 'db_connect.php';

if($_POST) {

    $ename = $_POST['event_name'];
    $edate = $_POST['event_date'];
    $eimg = $_POST['event_img'];
    $ecapacity = $_POST['event_capacity'];
    $eemail = $_POST['event_email'];
    $ephone = $_POST['event_phone'];
    $eaddress = $_POST['event_address'];
    $eurl = $_POST['event_url'];

 

    $sql = "INSERT INTO event (event_name, event_date, event_img, event_capacity, event_email, event_phone, event_address, event_url) VALUES ('$ename', '$edate', '$eimg', '$ecapacity', '$eemail', '$ephone', '$eaddress', '$eurl')";

    if($connect->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }


    $connect->close();

}

?>