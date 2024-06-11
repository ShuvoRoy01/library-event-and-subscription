<?php
session_start();
include "databaseconnection.php"; 
$query = "SELECT name, type, availability FROM subscription";
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
<form method="POST" action="">
    <input type="text" placeholder=" Search...." name="search">
    <button type="submit" name="submit">Submit</button>
</form>

<?php
if (isset($_POST['submit'])) {
    
    $search = mysqli_real_escape_string($conn, $_POST['search']);

    
    $query = "SELECT name, type, availability FROM subscription WHERE type LIKE '%$search%'";
}


$query_run = mysqli_query($conn, $query);

if ($query_run) {
    if (mysqli_num_rows($query_run) > 0) {
        echo "<div class='container mt-5'>";
        echo "<h2 class='text-center'>Subscription List</h2>";
        echo "<table class='table table-bordered table-striped' style='width:100%'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Availability</th>";
        echo "<th>Type</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($row = mysqli_fetch_assoc($query_run)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['availability'] . "</td>";
            echo "<td>" . $row['type'] . "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "No records found.";
    }
} else {
    echo "Error executing query: " . mysqli_error($conn);
}
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#memberTable').DataTable();
});
</script>
</body>
</html>
