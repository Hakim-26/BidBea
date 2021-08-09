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
  
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
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
				
				    <div  style="display:none" class="alert alert-success" id="addSuccessDiv">
                        <strong>Success!</strong> Registration done successfully Please Check email for verification.
                    </div>
					 <div  style="display:none" class="alert alert-warning" id="warningDiv">
                        <strong>Alert!</strong> <span id="warningDivSpan"></span>
                    </div>
					
					<form Method="POST" enctype="multipart/form-data"  class="needs-validation" novalidate>
						<div class="form-row">
							 <div class="input-group col-md-0 my-1">
								  <div class="custom-file">
									  <input type="file" name="productImage" id="productImage" required class="custom-file-input" accept="image/*" >
									  <label class="custom-file-label" for="productImage">Choose Governmentt ID<span class="text-danger">*</span></label>
								  </div>
							  </div>
						</div>		
						<div class="form-row">
							<div class="col-md-6">
								  <label for="uname">First name <span class="text-danger">*</span></label>
								  <input type="text" class="form-control" id="fname" placeholder="Firstname" name="fname" required>
								  <div class="valid-feedback">Valid.</div>
								  <div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="col-md-6">
								  <label for="uname">Last name <span class="text-danger">*</span></label>
								  <input type="text" class="form-control" id="lname" placeholder="Lastname" name="lname" required>
								  <div class="valid-feedback">Valid.</div>
								  <div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<div class="form-row">
						   <div class="col-md-6">
						   <label for="govt_number">Government ID <span class="text-danger">*</span></label>
							  <input type="text" class="form-control" id="govt_number" placeholder="Government ID" name="govt_number" required>
							  <div class="valid-feedback">Valid.</div>
							  <div class="invalid-feedback">Please fill out this field.</div>
							  
						   </div>
						   <div class="col-md-6">
							  <label for="uname">Email <span class="text-danger">*</span></label>
							  <input type="email" class="form-control" id="email" placeholder="xyz@bidbea.com" name="email" required>
							  <div class="valid-feedback">Valid.</div>
							  <div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						<div class="form-group">
							  <label for="pwd">Password <span class="text-danger">*</span></label>
							  <input type="password" class="form-control" id="pwd" placeholder="Password" name="pswd" required>
							  <div class="valid-feedback">Valid.</div>
							  <div class="invalid-feedback">Please fill out this field.</div>
						</div>
						
						<div class="form-row">
							<div class="col-md-4">
								  <label for="uname">Phone number <span class="text-danger">*</span></label>
								  <input type="text" class="form-control" id="phone_number" placeholder="Phone number" name="phone_number" required>
								  <div class="valid-feedback">Valid.</div>
								  <div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="col-md-4">
								  <label for="uname">Gender <span class="text-danger">*</span></label>
								  <select class="form-control" name="gender" id="gender"  required>
									 <option value="male" >Male</option>
									 <option value="female" >Female</option>
								   </select>
								  <div class="valid-feedback">Valid.</div>
								  <div class="invalid-feedback">Please fill out this field.</div>
							</div>
							<div class="col-md-4">
								  <label for="uname">Date of birth<span class="text-danger">*</span></label>
								  <input type="text" class="form-control" id="dob" placeholder="YYYY-MM-DD" name="dob" required>
								  <div class="valid-feedback">Valid.</div>
								  <div class="invalid-feedback">Please fill out this field.</div>
							</div>
						</div>
						
						 <div class="form-group">
							<label for="exampleFormControlTextarea1">Address<span class="text-danger">*</span></label>
							<textarea class="form-control" id="address" name="address" rows="1" required ></textarea>
						 </div>
						 
						 <div class="form-group">
							  <label for="userType">User type <span class="text-danger">*</span></label>
							  <select class="form-control" name="userType" id="userType"  required>
								 <option value="seller" >Seller</option>
								 <option value="buyer" >Buyer</option>
							  </select>
							  <div class="valid-feedback">Valid.</div>
							  <div class="invalid-feedback">Please fill out this field.</div>
						 </div>
						
						<button type="submit" name="signup" style="float:right;" class="btn btn-primary btn-sm">Register</button>
						
					</form>
				</div>
				<div class="card-footer text-center">
					<span>If you are Member?<a href="login.php">Sign in.</a></span>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
	
 
</div>
	<?php
			//Insert Data
			if(isset($_POST['signup'])){
				
				require_once('assets/lib/class.phpmailer.php');
				
				$firstName = $_POST['fname'];
				$lastName = $_POST['lname'];
				$govt_number = $_POST['govt_number'];
				$email = $_POST['email'];
				$phone_number = $_POST['phone_number'];
				$gender = $_POST['gender'];
				$dob = $_POST['dob'];
				$address = $_POST['address'];
				
				$encryptPassword = $hash = password_hash($_POST['pswd'], PASSWORD_DEFAULT);
				$userType = $_POST['userType'] ;
				
				$result = mysqli_query($ob->con,"SELECT * FROM users WHERE email='$email'");
				$row = mysqli_num_rows($result); 
				
				$user_verfication_code = md5(rand());
				
				$subject= 'Online Auction Registration Verification';

				$body = '
				<p>Thank you for registering.</p>
				<p>This is a verification email, please click the link to verify your email address by clicking this <a href="'.$ob->home_page.'/login.php?type='.$userType.'&code='.$user_verfication_code.'" target="_blank"><b>link</b></a>.</p>
				<p>In case if you have any difficulty please email us.</p>
				<p>Thank you,</p>
				<p>BidBea (BID.WIN.SAVE.REPEAT)</p>
				';
				
				if($row > 0){
					echo "<script type='text/javascript'>
							$(document).ready(function(){ 
								$('#warningDivSpan').text('This email address is already registered..');
								$('#warningDiv').show().delay(5000).fadeOut();
							});
						</script>" ;
				}else{
					
					$sql = "INSERT INTO users (govt_id,first_name,last_name,email,password,phone_number,gender,address,date_of_birth,user_type,is_aproved,verification_code,status) VALUES
											  ('$govt_number','$firstName','$lastName','$email','$encryptPassword','$phone_number','$gender','$address','$dob','$userType','no','$user_verfication_code','')";
					
					if ($ob->con->query($sql) === TRUE) {
						$ob->send_email($email, $subject, $body);
						
						$temp = explode(".", $_FILES["productImage"]["name"]);
						$newfilename = $govt_number .'.png';
						move_uploaded_file($_FILES["productImage"]["tmp_name"], "assets/govt_id/" . $newfilename);
					
						echo "<script type='text/javascript'>
								$(document).ready(function(){ 
									$('#addSuccessDiv').show().delay(5000).fadeOut(); 
								});
							 </script>" ;
							
					} else {
						echo 'Error: ' + $sql . '<br>' . $ob->con->error;
					}
				}
				
							
				
			}//End Of if
			
			
			
		
			
		
		?>

<script type="text/javascript">
	
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
	
	$(document).ready(function() {
		$("#dob").datepicker({ dateFormat: 'yy-mm-dd' });
		
		   function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
							$('#product-img-tag').attr('src', e.target.result);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}//End readUrl
			$("#productImage").change(function(){
				   readURL(this);
			});

			$(".custom-file-input").on("change", function() {
			  var fileName = $(this).val().split("\\").pop();
			  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
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


