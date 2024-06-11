<?php
include 'databaseconnection.php'; 

if (isset($_POST['submit'])) {
    $author_id = $_POST['author_id'];
    $name = $_POST['name'];
    $nationality = $_POST['nationality'];
    $biography = $_POST['biography'];

  
    $sql = "INSERT INTO author (author_id, name, nationality,biography) VALUES (?,?, ?, ?)";
    $stmt = $conn->prepare($sql);

  
    $stmt->bind_param("ssss", $author_id, $name, $nationality,$biography);

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
    <meta author_id="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert New author</title>
</head>
<body>
    <h2>Insert New author</h2>
    <form method="post">
        <label for="author_id">author_id:</label>
        <input type="text" id="author_id" name="author_id" required><br><br>
        
        <label for="name">name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="nationality">nationality:</label>
        <input type="text" id="nationality" name="nationality" required><br><br>

        <label for="biography">biography:</label>
        <input type="text" id="biography" name="biography" required><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
