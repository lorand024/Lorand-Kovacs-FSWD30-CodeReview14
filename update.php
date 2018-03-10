<?php

require_once 'actions/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

 

    $sql = "SELECT * FROM event WHERE id = {$id}";
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    $connect->close();
?>

 

<!DOCTYPE html>
<html>
<head>

    <title>Edit Event</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

<fieldset>
    <legend>Update Event</legend>
    <div class="container">
    <form action="actions/a_update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>

                <th>Event Name</th>
                <td><input type="text" name="event_name" placeholder="Event Name" value="<?php echo $data['event_name'] ?>" /></td>

            </tr>     
            <tr>

                <th>Event Date</th>
                <td><input type="text" name="event_date" placeholder="Event Date" value="<?php echo $data['event_date'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Image</th>
                <td><input type="text" name="event_img" placeholder="Event Image" value="<?php echo $data['event_img'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Capacity</th>
                <td><input type="text" name="event_capacity" placeholder="Event Capacity" value="<?php echo $data['event_capacity'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Email</th>
                <td><input type="text" name="event_email" placeholder="Event Email" value="<?php echo $data['event_email'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Phone</th>
                <td><input type="text" name="event_phone" placeholder="Event Phone" value="<?php echo $data['event_phone'] ?>" /></td>

            </tr>
            <tr>

                <th>Event Address</th>
                <td><input type="text" name="event_address" placeholder="Event Address" value="<?php echo $data['event_address'] ?>" /></td>

            </tr>
            <tr>

                <th>Event URL</th>
                <td><input type="text" name="event_url" placeholder="Event URL" value="<?php echo $data['event_url'] ?>" /></td>

            </tr>
            <tr>

                <th>Are there any tickets left?</th>
                <td><input type="text" name="active" placeholder="Write 1 if no tickets left." value="<?php echo $data['active'] ?>" /></td>

            </tr>
            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id']?>" />

                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>

            </tr>
        </table>
    </form>
</div>

</fieldset>

</body>
</html>

<?php
}
?>