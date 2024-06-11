<?php
session_start();
include "databaseconnection.php";


$query = "SELECT * FROM book";

if (isset($_POST['delete'])) {
    $ISBN = $_POST['ISBN'];

    
    $delete_query = "DELETE FROM book WHERE ISBN = ?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("s", $ISBN);

    if ($stmt->execute()) {
        echo "Book deleted successfully.";
    } else {
        echo "Error deleting book: " . $stmt->error;
    }

    $stmt->close();
}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/jquery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<table class="table table-bordered" width="900px" style="text-align: center">
				<tr>
					<th>title$title</th>
					<th>Category</th>
					<th>Author</th>
					<th>Genre</th>
					<th>Title</th>
					<th>Publication Date</th>
				</tr>
				<?php
				$query_run = mysqli_query($conn, $query);
				if ($query_run) {
					while ($row = mysqli_fetch_assoc($query_run)){
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
					<td>
                        <form method="post" action="">
                            <input type="hidden" name="ISBN" value="<?php echo $ISBN; ?>">
                            <button type="submit" name="delete" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
				</tr>
				<?php
					}
				} else {
					echo "<tr><td colspan='6'>No records found</td></tr>";
				}
				?>
			</table>
		</div>
		<div class="col-md-2"></div>
	</div>
</body>
</html>
