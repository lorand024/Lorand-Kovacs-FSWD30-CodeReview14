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

 

    $id = $_POST['id'];

    $sql = "UPDATE event SET event_name = '$ename', event_date = '$edate', event_img = '$eimg', event_capacity = '$ecapacity', event_email = '$eemail', event_phone = '$ephone', event_address = '$eaddress', event_url = '$eurl' WHERE id = {$id}";

    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";

    } else {
        echo "Erorr while updating record : ". $connect->error;

    }

    $connect->close();
}

?>