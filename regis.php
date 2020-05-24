<?php

session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		 <?php  include 'css/style.php' ?> 
		<?php  include 'links/links.php' ?>
	</head>
	<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
	$username = mysqli_real_escape_string($con, $_POST['username']) ;
	$email = mysqli_real_escape_string($con, $_POST['email']) ;
	$mobile = mysqli_real_escape_string($con, $_POST['mobile']) ;
	$password = mysqli_real_escape_string($con, $_POST['password']) ;
  $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']) ;
  
  if($password == $cpassword)
  {

  }

	$pass = password_hash($password, PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword, PASSWORD_BCRYPT);


		if($password === $cpassword){

			$insertquery = "insert into registration( name, email, mobile, password) values('$username','$email','$mobile','$pass')";

			$iquery = mysqli_query($con, $insertquery);

			if($iquery){
					?>
						<script>
							alert("Sign Up Successful");
						</script>
					<?php
				}else{

					?>
						<script>
							alert("Please try again ");
						</script>
					<?php
				}

		}else{
			?>
				<script>
					alert("Password are not matching ");
						</script>
					<?php
		}
	}
?>


		<div class="card bg-light">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title mt-3 text-center">Create Account</h4>
			<p class="text-center">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-gmail"> <i class="fa fa-google"></i>   Login via Gmail</a>
				<a href="" class="btn btn-block btn-facebook"> <i class="fa fa-facebook-f"></i>   Login via facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light">OR</span>
			</p>
			<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="username" class="form-control" placeholder="Full name" type="text" required>
					</div> <!-- form-group// -->
					<div class="form-group input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
						</div>
						<input name="email" class="form-control" placeholder="Email address" type="email" required>
						</div> <!-- form-group// -->
						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
							</div>
							<input name="mobile" class="form-control" placeholder="Phone number" type="number" required>
							</div> <!-- form-group// -->
							
							<div class="form-group input-group">
								<div class="input-group-prepend">
									<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
								</div>
								<input class="form-control" placeholder="Create password" type="password" name="password" value="" required>
								</div> <!-- form-group// -->
								<div class="form-group input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
									</div>
									<input class="form-control" placeholder="Repeat password" type="password" name="cpassword" required>
									</div> <!-- form-group// -->
									<div class="form-group">
										<button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
										</div> <!-- form-group// -->
										<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
									</form>
								</article>
								</div> <!-- card.// -->
							</div>
							
						</div>
					</div>

			</body>
		</html>