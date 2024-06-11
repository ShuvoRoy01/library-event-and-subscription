<?php
session_start();
include "databaseconnection.php";


$query = "SELECT * FROM book";


if (isset($_POST['submit'])) {
    
    $search = mysqli_real_escape_string($conn, $_POST['search']);
   
    $query = "SELECT * FROM book WHERE title LIKE '%$search%' OR author LIKE '%$search%' OR genre LIKE '%$search%' OR catagory LIKE '%$search%'";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="../bootstrap-4.4.1/css/bootstrap.min.css">
    <script src="../bootstrap-4.4.1/js/jquery_latest.js"></script>
    <script src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-4">Book List</h2>
        <form method="POST" action="">
            <div class="form-group row">
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Search by title, author, genre, or category" name="search" required>
                </div>
                <div class="col-md-2">
                    <button type="submit" name="submit" class="btn btn-primary">Search</button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr>
                            <th>ISBN</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>Title</th>
                            <th>Publication Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_run = mysqli_query($conn, $query);
                        if ($query_run) {
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                                    $ISBN = $row['ISBN'];
                                    $title = $row['title'];
                                    $author = $row['author'];
                                    $genre = $row['genre'];
                                    $category = $row['catagory'];
                                    $publication_date = $row['publication_date'];
                        ?>
                        <tr>
                            <td><?php echo $ISBN; ?></td>
                            <td><?php echo $category; ?></td>
                            <td><?php echo $author; ?></td>
                            <td><?php echo $genre; ?></td>
                            <td><?php echo $title; ?></td>
                            <td><?php echo $publication_date; ?></td>
                        </tr>
                        <?php
                                }
                            } else {
                                echo "<tr><td colspan='6'>No records found</td></tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Error executing query: " . mysqli_error($conn) . "</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
