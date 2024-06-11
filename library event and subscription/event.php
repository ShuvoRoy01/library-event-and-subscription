<?php
session_start();
include "databaseconnection.php";


$query = "SELECT * from  event";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subscription List</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>
<body> 
    <div class="container mt-5">
        <h2 class="text-center">Event List</h2>
        <table id="memberTable" class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>event_id</th>
                    <th>event_name</th>
                    <th>date</th>
                    <th>location</th>
                    <th>branch_id</th>
                    <th>description</th>
                    
                </tr>
            </thead>
            <tbody>
                    <?php
                    $query_run = mysqli_query($conn, $query);
                    if ($query_run) {
                        while ($row = mysqli_fetch_assoc($query_run)){
                            
                            $event_name = $row['event_name'];
                            $date = $row['date'];
                            $event_id = $row['event_id'];
                            $location = $row['location'];
                            $branch_id = $row['branch_id'];
                            $description = $row['description'];
                            
                    ?>
                    <tr>
                        
                        <td><?php echo $event_id; ?></td>
                        <td><?php echo $event_name; ?></td>
                        <td><?php echo $date; ?></td>
                        <td><?php echo $location; ?></td>
                        <td><?php echo $branch_id; ?></td>
                        <td><?php echo $description; ?></td>
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
