<?php
include 'databaseconnection.php';
include 'book.html';
if (isset($_POST['submit'])) {
    $ISBN = $_POST['ISBN'];   
    $author = $_POST['author'];
    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $category = $_POST['category'];
    $date = $_POST['publication_date'];


   
    $sql = "INSERT INTO book (ISBN, author, title, genre,catagory, publication_date) VALUES ( ?,?,?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssssss", $ISBN, $author, $title, $genre,$category,$date);

    if ($stmt->execute()) {
        echo "New book inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    


   
}
 
?>
