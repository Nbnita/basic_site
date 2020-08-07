<?php
	include 'include.php';
	include "login.php";

	if(isset($_POST['submit'])){

			$email=$_POST['email'];
			$password=$_POST['password'];


		$qry="SELECT * FROM posts WHERE email='$email' AND password='$password';";

		$result=mysqli_query($conn,$qry);
		$row=mysqli_num_rows($result);
		if($row<1){
			?>
			<script>alert('email and password not matched');
			window.open('login.php','_self');
			</script>
			<?php
		}
		else{
			$data=mysqli_fetch_assoc($result);
			header("location:donate.php");

		}

	}		
 ?>