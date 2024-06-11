<?php
	session_start();
    include 'databaseconnection.php';
    include 'login.html';
?>

			<?php 
				if(isset($_POST['login'])){
					$query = "select * from user where email = '$_POST[email]'";
					$query_run = mysqli_query($conn,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['username'] =  $row['username'];
								$_SESSION['email'] =  $row['email'];
								$_SESSION['id'] =  $row['id'];
								header("Location:dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
