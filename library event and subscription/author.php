<?php
session_start();
include "databaseconnection.php";


$query = "SELECT * from  author";


if (isset($_POST['delete'])) {
    $book_id = $_POST['book_id'];

    $delete_query = "DELETE FROM books WHERE book_id = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $book_id);

    if ($stmt->execute()) {
        echo "Book deleted successfully.";
    } else {
        echo "Error deleting book: " . $stmt->error;
    }

    $stmt->close();
}


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
                        <td>
                        <form method="post" action="">
                            <input type="hidden" name="author_id" value="<?php echo $author_id; ?>">
                            <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
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
