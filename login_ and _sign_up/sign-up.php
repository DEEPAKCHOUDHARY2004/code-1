<?php
include 'configer.php';

error_reporting(0);

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>


<!DOCTYPE html>

<html lang="en">
<head>
  <title>signup-page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="syne.css">
  <link rel="stylesheet" href="C:\xampp\htdocs\Salient Free Website Template - Free-CSS.com\codelearn web\login_ and _sign_up\sign-up.css">
</head>
<body>

<section class="vh-100" style="margin-top:-4%; ">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
      
      <h1 style="font-size:2vw;" id="effect">“Coding is the language of the future <br>Lets start learn coding with CODELAND”</h1>
        <script src="auto_type.js"></script>
        <img src="https://image.freepik.com/free-vector/code-testing-cartoon-banner-functional-test-methodology-programming-search-errors-bugs-website-platform-development-dashboard-usability-optimization-computer-pc-vector-illustration_107791-3766.jpg?w=826" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
       
      <img  style ="height: 60px; margin-bottom: -13%; margin-left: 12%; color:black;" src="codelandlogo1.png" class="logo" alt="Phone-image"/>
        <h2 style="margin-left: 30%; font-family: Times New Roman, Times, serif; text-shadow: 2px 2px 5px black;">CODELAND</h2>
        <form action="" method="POST">

<div class="form-outline mb-4">
<label class="form-label" for="form3Example1cg">Your Name</label>
  <input type="text" id="form3Example1cg" class="form-control form-control-lg"  name="name" id="name" placeholder="Name..."value="<?php echo $username;?>" required />
  
</div>

<div class="form-outline mb-4">
<label class="form-label" for="form3Example3cg">Your Email</label>
  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email"  id ="email" placeholder="Email..." value="<?php echo $email; ?>" required/>

</div>

<div class="form-outline mb-4">
<label class="form-label" for="form3Example4cg">Password</label>
  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password"  id="password" placeholder="password..."  value="<?php echo $_POST['password']; ?>" required/>

</div>

<div class="form-outline mb-4">
<label class="form-label" for="form3Example4cdg">Confirm your Password</label>
  <input type="password" id="form3Example4cdg" class="form-control form-control-lg"  name="Confirm Password" placeholder="Confirm Password"value="<?php echo $_POST['cpassword']; ?>" required/>

</div>

<!-- <div class="form-check d-flex justify-content-center mb-4">
  <input style="margin-left: 25%;"
    class="form-check-input me-2"
    type="checkbox"
    value=""
    name="checkbox"
    id="form2Example3cg"
  require/><p style="margin-right: 15%; color:red;"> I agree all statements in</p>
  <label class="form-check-label" for="form2Example3g">
     <a href="#!" class="text-body"><u>Terms of service</u></a>
  </label>
</div> -->

<div class="d-flex justify-content-center">
  <button type="button"  name="submit"  class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
</div>
<div style="margin-bottom:20%;">
<p class="text-center text-muted mt-5 mb-0" >Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>
</div>
</form>

      </div>
    </div>
  </div>
</section>























</body>
</html>






























<!-- 

<section class="vh-100" style="margin-top:-4%;">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://image.freepik.com/free-vector/cyber-security-risk-analysts-team-reduce-risks-cyber-security-management-cyber-security-risk-management-strategy-concept_335657-1828.jpg?w=740" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
       
      <img  style ="height: 60px; margin-bottom: -13%; margin-left: 12%;" src="codelandlogo1.png" class="logo" alt="Phone-image"/>
        <h2 style="margin-left: 30%; font-family: Times New Roman, Times, serif; text-shadow: 2px 2px 5px black;">CODELAND</h2>
        <form>
          Email input
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          Password input
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            Checkbox
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="form1Example3"
                checked
              />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          Submit button
          <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

          <div class="divider d-flex align-items-center my-4" >
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>
          <a  class="btn btn-primary btn-lg btn-block" style="background-color: red ;  border:none" href="#!" role="button">
            <i class="fab fa-google me-2"></i>Continue with Google</a>

          <a  i class="btn btn-primary btn-lg btn-block" style="background-color: #3b5999; border:none" href="#!" role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
         
        </form>
      </div>
    </div>
  </div>
</section> -->
