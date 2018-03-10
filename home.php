<?php 
	ob_start();
	session_start();
	require_once 'actions/db_connect.php'; 
	

	$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=".$_SESSION['user']);

	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>

    <title>PHP CRUD</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style type="text/css">
    
    tbody img {
      width: 200px;
      padding: 10px;
    }

    tbody tr {
        padding: 5px;
    }
  </style>

</head>
<body>
    <div class="container">
	<header id="header" class="">
		<div class="row">
			<div class="col-md-5">
				<h1>Welcome to Big Events in Vienna, <?php echo $userRow['userName']; ?>!</h1>
			</div>
			<div class="col-md-7">
				<button class="btn" id="sign-out">
					<a href="logout.php?logout">Sign Out</a>
				</button>
			</div>
		</div>
			
			
	</header><!-- /header -->
	
				
<div class="manageUser">
    
    <h3>Upcoming Events with tickets left:</h3>
    <a href="create.php"><button type="button">Add Event</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Event Image</th>
                <th>Event Capacity</th>
                <th>Event Email</th>
                <th>Event Phone</th>
                <th>Event Address</th>
                <th>Event URL</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
			<?php

            $sql = "SELECT * FROM event WHERE active = 0";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <div class='col-md-4 col-sm-10'>
                        <td>".$row['event_name']."</td>
                        <td>".$row['event_date']."</td>
                        <td><img src=".$row['event_img']."/></td>
                        <td>".$row['event_capacity']."</td>
                        <td>".$row['event_email']."</td>
                        <td>".$row['event_phone']."</td>
                        <td>".$row['event_address']."</td>
                        <td>".$row['event_url']."</td>    
                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>

                        </td>
                        </div>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8'><center>No Data Avaliable</center></td></tr>";

            }
             ?>
        </tbody>
    </table>
    <h3>Upcoming Events with no tickets left:</h3>
    <table border="1" cellspacing="0" cellpadding="0">
		<!-- the inactive -->
		<thead>
            <tr>
                <th>Event Name</th>
                <th>Event Date</th>
                <th>Event Image</th>
                <th>Event Capacity</th>
                <th>Event Email</th>
                <th>Event Phone</th>
                <th>Event Address</th>
                <th>Event URL</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
			<?php

            $sql = "SELECT * FROM event WHERE active = 1";
            $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {

                    echo "<tr>
                        <td>".$row['event_name']."</td>
                        <td>".$row['event_date']."</td>
                        <td><img src=".$row['event_img']."/></td>
                        <td>".$row['event_capacity']."</td>
                        <td>".$row['event_email']."</td>
                        <td>".$row['event_phone']."</td>
                        <td>".$row['event_address']."</td>
                        <td>".$row['event_url']."</td>    
                        <td>

                            <a href='update.php?id=".$row['id']."'><button type='button'>Edit</button></a>

                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>

                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='8'><center>No Data Avaliable</center></td></tr>";

            }
             ?>
        </tbody>
    </table>
</div>
</div>
</body>
</html>    