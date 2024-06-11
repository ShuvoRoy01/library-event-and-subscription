

<?php
session_start();
include "databaseconnection.php";
$query = "SELECT * FROM author";
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
        <h2 class="text-center">Author List</h2>
        <table id="memberTable" class="table table-bordered table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>author_id</th>
                    <th>name</th>
                    <th>nationality</th>
                    <th>biography</th>
                    
                </tr>
            </thead>
            <tbody>
                    <?php
                    $query_run = mysqli_query($conn, $query);
                    if ($query_run) {
                        while ($row = mysqli_fetch_assoc($query_run)){
                            
                            $name = $row['name'];
                            $nationality = $row['nationality'];
                            $author_id = $row['author_id'];
                            $biography = $row['biography'];
                           
                            
                    ?>
                    <tr>
                        
                        <td><?php echo $author_id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $nationality; ?></td>
                        <td><?php echo $biography; ?></td>
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
