<!DOCTYPE html>
<html lang="en">
<head>
  <title>BidBea</title>
  <link rel="icon" href="assets/img/bidbea3.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="assets/img/bidbea3.png" alt="">
			<span style="color:white; font-size:25px;"><b>BidBea</b><i style="color:white; font-size:15px;"> BID.WIN.SAVE.REPEAT</i></span>
		</a>
        
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
		  <li><a href="index.php">Home</a></li>
          <li class="menu-has-children"><a href="">Currency</a>
            <ul>
              <li><a href="#">Crypto</a></li>
              <li><a href="#">Fiat</a></li>
            </ul>
          </li>
		  <li><a href="login.php">Login</a></li>
          <li><a href="product.php">Products</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

     
    </div>
  </header><!-- End Header -->
 
 
<div class="container" style="margin-top:50px; margin-bottom:110px;">

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header text-center">
					<img src="assets/img/bidbea2.png" alt="">
				</div>
				<div class="card-body">
					<div  style="display:none" class="alert alert-warning"id="emailWarning">
                            <strong>Warning!</strong> Incorrect Email-Address and Password.
                    </div>
					
					<form method="POST" class="needs-validation" novalidate>
						<div class="form-group">
							  <label for="uname">Email:</label>
							  <input type="email" class="form-control" id="email" placeholder="xyz@bidbea.com" name="email" required>
							  <div class="valid-feedback">Valid.</div>
							  <div class="invalid-feedback">Please fill out this field.</div>
						</div>
						
						<div class="form-group">
							  <label for="pwd">Password:</label>
							  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
							  <div class="valid-feedback">Valid.</div>
							  <div class="invalid-feedback">Please fill out this field.</div>
						</div>
						
						<button type="submit" name="signin" class="btn btn-primary btn-block btn-sm">Submit</button>
						<center><span>Not a Member yet?<a href="signup.php">Sign up.</a></span></center>
					</form>
				</div>
				<div class="card-footer text-center">
					<a href="forgot.php">Forgot Password?</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
 
</div>

 <?php
            if(isset($_POST['signin'])){

                $email = $_POST['email'];

                $con=mysqli_connect("localhost", "root", "" , "auction-online");
                $query = "SELECT * FROM user";
                $result = mysqli_query($con,$query);
				$isValid = "not-verified";
                while($row = mysqli_fetch_array($result))
                {
                    $rowEmail = $row['email'];
                    
                    if(password_verify($_POST['pswd'],$row['password']) && $email == $rowEmail ) {
						session_start();
						$_SESSION["user_id"] = $row['user_id'];
						$_SESSION["user_type"] = $row['user_type'];
						
						if($row['user_type'] == "seller"){
							echo "<script type='text/javascript'>window.top.location='http://localhost:8000/project/online-auction/add-product.php';</script>"; 
							$isValid= "verified";
						}
						else if($row['user_type'] == "buyer"){
							echo "<script type='text/javascript'>window.top.location='http://localhost:8000/project/online-auction/product.php';</script>"; 
							$isValid= "verified";
						}
					}//end of inner if
                   
                }//End of While
				if(isValid !== "verified")
					echo "<script>$('#emailWarning').show().delay(5000).fadeOut();</script>" ;
				
                mysqli_close($con);
            }//End of if
        ?>

<script>
	// Disable form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
		// Get the forms we want to add validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		  form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			  event.preventDefault();
			  event.stopPropagation();
			}
			form.classList.add('was-validated');
		  }, false);
		});
	  }, false);
	})();
</script>

<?php include("footer.php");?>

</body>
</html>


