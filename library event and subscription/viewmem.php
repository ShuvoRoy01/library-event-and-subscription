<?php
session_start();
include "databaseconnection.php";


$query = "SELECT members_id, status, contact, full_name FROM members";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member List</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="../bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table table-bordered" width="900px" style="text-align: center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Status</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query_run = mysqli_query($conn, $query);
                    if ($query_run) {
                        while ($row = mysqli_fetch_assoc($query_run)){
                            $members_id = $row['members_id'];
                            $status = $row['status'];
                            $contact = $row['contact'];
                            $full_name = $row['full_name'];
                            
                    ?>
                    <tr>
                        <td><?php echo $members_id; ?></td>
                        <td><?php echo $full_name; ?></td>
                        <td><?php echo $status; ?></td>
                        <td><?php echo $contact; ?></td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='4'>No records found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
</body>
</html>
