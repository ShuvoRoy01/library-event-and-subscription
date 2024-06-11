<?php
	include "databaseconnection.php";
	$query = "delete from authors where author_id = $_GET[author_id]";
	$query_run = mysqli_query($conn,$query);
?>
<script type="text/javascript">
	alert("Author Deleted successfully...");
	window.location.href = "author.php";
</script>