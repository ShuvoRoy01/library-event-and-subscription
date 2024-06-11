<?php
include 'databaseconnection.php'; 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $status = $_POST['status'];
    $contact = $_POST['contact'];

    
    $sql = "INSERT INTO members (full_name, status, contact) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);


    $stmt->bind_param("sss", $name, $status, $contact);

    if ($stmt->execute()) {
        echo "Member inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New Member</title>
</head>
<body>
    <h2>Insert New Member</h2>
    <form action='member.php' method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="status">Status:</label>
        <input type="text" id="status" name="status" required><br><br>

        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
