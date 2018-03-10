<!DOCTYPE html>
<html>
<head>

    <title>PHP CRUD  |  Add Table</title>

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>

    <fieldset>

        <legend>Add Event</legend>

        <form action="actions/a_create.php" method="post">
            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>Event Name</th>
                    <td><input type="text" name="event_name" placeholder="Event Name" /></td>
                </tr>

                <tr>
                    <th>Event Date</th>
                    <td><input type="text" name="event_date" placeholder="Event Date" /></td>
                </tr>

                <tr>
                    <th>Event Image</th>
                    <td><input type="text" name="event_img" placeholder="Event Image" /></td>
                </tr>

                <tr>
                    <th>Event Capacity</th>
                    <td><input type="text" name="event_capacity" placeholder="Event Capacity" /></td>
                </tr>

                <tr>
                    <th>Event Email</th>
                    <td><input type="text" name="event_email" placeholder="Event Email" /></td>
                </tr>

                <tr>
                    <th>Event Phone Number</th>
                    <td><input type="text" name="event_phone" placeholder="Event Phone Number" /></td>
                </tr>

                <tr>
                    <th>Event Address</th>
                    <td><input type="text" name="event_address" placeholder="Event Address" /></td>
                </tr>

                <tr>
                    <th>Event URL</th>
                    <td><input type="text" name="event_url" placeholder="Event URL" /></td>
                </tr>

                <tr>
                    <td><button type="submit">Insert event</button></td>
                    <td><a href="index.php"><button type="button">Back</button></a></td>
                </tr>
            </table>
        </form>

    </fieldset>

</body>
</html>