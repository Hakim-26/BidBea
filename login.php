<?php 
	include('Master.php');
	$ob = new Master; 
?>

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

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="index.php">
		<img src="assets/img/bidbea3.png" style="width:70px; height:40px;" alt="">
		<span style="color:white; font-size:25px;"><b>BidBea</b><i style="color:white; font-size:15px;"> BID.WIN.SAVE.REPEAT</i></span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link"  style="color:white" href="index.php">Home</a>
      </li>
	 </ul>
	</div>
</nav>


<!-- #nav-menu-container -->
 
 
 
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
					<div  style="display:none" class="alert alert-warning"id="passwordWarning">
                            <strong>Warning!</strong> Sorry! Incorrect Password try again..
                    </div>
					<div  style="display:none" class="alert alert-warning"id="activationWarning">
                            <strong>Warning!</strong> Sorry! Your Account is not active yet..
                    </div>
					<div  style="display:none" class="alert alert-success" id="addSuccessDiv">
						<strong>Verification!</strong> Enter password for verification .
					</div>
					<div  style="display:none" class="alert alert-success" id="verifySuccessDiv">
						<strong>Success!</strong> Verification done successfully please wait for Admin approval THANKS.
					</div>
					<div  style="display:none" class="alert alert-warning" id="warningDiv">
						<strong>Alert!</strong> <span id="warningDivSpan"></span>
					</div>
					
					<form method="POST" class="needs-validation" novalidate>
					
					<?php
						 
							
							$is_verify_page = '';
							$user_type = '';
							$user_verification_code = '';
							if (isset($_REQUEST['type'])) {
								$user_type = mysqli_real_escape_string($ob->con,$_REQUEST['type']);
								if (isset($_REQUEST['code'])) {
									$user_verification_code = mysqli_real_escape_string($ob->con,$_REQUEST['code']);
									
									 echo "<script type='text/javascript'>
											$(document).ready(function(){ 
												$('#addSuccessDiv').show().delay(5000).fadeOut(); 
											});
										</script>" ;
										
									$is_verify_page = 'yes';
									
								}
							}
							
							
							
							$query = "SELECT * FROM `users` WHERE user_type='$user_type' AND verification_code='$user_verification_code' ";
							$result = mysqli_query($ob->con,$query);
							$email = '';
							$user_id = '';
							while($row = mysqli_fetch_array($result))
							{
								$email = $row['email'];
								$user_id = $row['user_id'];
							
							}
							if($is_verify_page == 'yes'){
								
								echo '<div class="form-group">
									  <label for="uname">Email:</label>
									  <input type="email" class="form-control" id="email" placeholder="xyz@bidbea.com" name="email" value="'.$email.'" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
									  <input type="hidden" name="userIdHidden" id="userIdHidden" value="'. $user_id .'">
								</div>';
								
								echo '<div class="form-group">
									  <label for="pwd">Password:</label>
									  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
									  <div class="valid-feedback">Valid.</div>
									  <div class="invalid-feedback">Please fill out this field.</div>
								</div>';
								echo '<button type="submit" name="verify" class="btn btn-success btn-block btn-sm">Verify</button>';
								
								
							}
							else{
					?>
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
						<button type="submit" style="float:right;" name="signin" class="btn btn-primary btn-sm">Login</button>
						
					<?php								
							}
							

					  ?>
						
						
						
						
						<center><span>Not a Member yet?<a href="signup.php">Sign up.</a></span></center>
					</form>
				</div>
				<div class="card-footer text-center">
					<a id="forgotPassword" href="#">Forgot Password?</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
 
</div>

 <?php
            if(isset($_POST['signin'])){

                $email = $_POST['email'];

                
                $query = "SELECT * FROM users";
                $result = mysqli_query($ob->con,$query);
				$isValid = "not-verified";
                while($row = mysqli_fetch_array($result))
                {
                    $rowEmail = $row['email'];
                    $status = $row['status'];
                    
                    if(password_verify($_POST['pswd'],$row['password']) && $email == $rowEmail ) {
						
						if($status == '1'){
							
							
							$_SESSION["user_id"] = $row['user_id'];
							$_SESSION["user_type"] = $row['user_type'];
							
							
							
							if($row['user_type'] == "seller"){
								echo "<script type='text/javascript'>window.top.location='$ob->home_page/add-product.php';</script>"; 
								$isValid= "verified";
							}
							else if($row['user_type'] == "buyer"){
								echo "<script type='text/javascript'>window.top.location='$ob->home_page/product.php';</script>"; 
								$isValid= "verified";
							}
							else if($row['user_type'] == "admin"){
								echo "<script type='text/javascript'>window.top.location='$ob->home_page/admin-dashboard.php';</script>"; 
								$isValid= "verified";
							}
						}//end of inner if
						else{
							echo "<script>$('#activationWarning').show().delay(5000).fadeOut();</script>" ;
							exit;
						}
					}//end of outer if
                   
                }//End of While
				if($isValid !== "verified")
					echo "<script>$('#emailWarning').show().delay(5000).fadeOut();</script>" ;
				
                
            }//End of if
			

			
			//Insert Data
			if(isset($_POST['verify'])){
				
				$user_id = $_POST['userIdHidden'];
				
				$query = "SELECT * FROM users WHERE user_id='$user_id'";
                $result = mysqli_query($ob->con,$query);
				$isValid = "not-verified";
                while($row = mysqli_fetch_array($result))
                {
                    $rowEmail = $row['email'];
                    
                    if(password_verify($_POST['pswd'],$row['password']) && $email == $rowEmail ) {
						$sql = "UPDATE users SET status='0' WHERE user_id='$user_id' ";
						$isValid= "verified";
						if ($ob->con->query($sql) === TRUE) {
							  echo "<script type='text/javascript'>
										$(document).ready(function(){ 
											$('#verifySuccessDiv').show().delay(5000).fadeOut(); 
										});
									</script>" ;
						} else {
							echo "Error: ' . $sql . '<br>' . $ob->con->error" ;
						}
							
					}//end of inner if
                   
                }//End of While
				if($isValid !== "verified")
					echo "<script>$('#passwordWarning').show().delay(5000).fadeOut();</script>" ;
				
				
				
				
				
				
				$ob->con->close();
				
			}//End Of if
			
			
			
			
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
	
	
	$(document).ready(function(){
			$("#forgotPassword").on('click',function(){
			var email = $("#email").val();
			
			var password = Math.floor(100000 + Math.random() * 900000);   
				password = String(password);
				password = password.substring(0,4);
	
			var forgotPassword = "forgotPassword";
			if(email != ""){
				$.ajax({
					url : "user_ajax.php",
					type:"POST",
					data: { 'action': forgotPassword,'email':email,'password':password},
					success: function (data) {		
						if(data.trim().includes("success")){		
							$('#warningDivSpan').text("New password has been sent to your email");
							$('#warningDiv').show().delay(5000).fadeOut(); 
						}
						else{
							$('#warningDivSpan').text(data.trim());
							$('#warningDiv').show().delay(5000).fadeOut(); 
						}
					}
				});
			}else{
				$('#warningDivSpan').text("Enter Email please..");
				$('#warningDiv').show().delay(5000).fadeOut(); 
			}
		});
	});
</script>

<!-- ======= Footer ======= -->
  <footer class="site-footer" >
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-12 text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>BidBea</strong>. All Rights Reserved
            </p>
          </div>
		  
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

</body>
</html>


