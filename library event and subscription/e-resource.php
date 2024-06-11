
<?php
include 'databaseconnection.php';

if (isset($_POST['submit'])) {
    $resource_name = $_POST['resource_name'];

    
    $sql = "INSERT INTO e_resource (resource_name) VALUES (?)";
    $stmt = $conn->prepare($sql);

   
    $stmt->bind_param("s", $resource_name);

    if ($stmt->execute()) {
        echo "E-Resource inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert E-Resource</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Insert E-Resource</h2>
        <form method="post">
            <div class="form-group">
                <label for="resource_name">Resource Name:</label>
                <input type="text" class="form-control" id="resource_name" name="resource_name" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
