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
	$email = $_POST['email'];
	$password = $_POST['password'];

	$email_search = " select * from registration where email='$email' ";
	$query = mysqli_query($con,$email_search);

	$email_count = mysqli_num_rows($query);

	if($email_count){
		$email_pass = mysqli_fetch_assoc($query);

		$db_pass = $email_pass['password'];

    $_SESSION['username'] = $email_pass['name'];
    $_SESSION['id'] = $email_pass['id'];

		$pass_decode = password_verify($password, $db_pass);

		if($pass_decode){
			echo "login successful";
			?>
			<script>
				location.replace("home.php");
			</script>
			<?php
		}else{
		echo "password Incorrect";
		}

	}else{
		echo "Invalid Email";
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
        <input name="email" class="form-control" placeholder="Full name" type="email">
    </div> <!-- form-group// -->
 
 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" name="password" value="">
    </div> <!-- form-group// -->
                                   
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Login Now  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Not Have an account? <a href="regis.php">SignUp Here</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 

</body>
</html>


