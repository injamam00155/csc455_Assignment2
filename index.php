<?php
    $prompt=false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        
      include 'database.php';

          $fname=$_POST['fname'];
		  $lname=$_POST['lname'];
          $email=$_POST['email'];
          $message=$_POST['message'];
          $str= "INSERT INTO `customer`(`fname`, `lname`, `email`, `messages`) VALUES ('$fname','$lname','$email','$message')";          
        
        if ($connection->query($str) == true) {
          $prompt=true;         
        } else {
          echo "Error: " . $str . "<br>" . $connection->error;
        }
        $connection->close();

      } 
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="index.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body class="bg">

<!------ Include the above in your HEAD tag ---------->
<div></div>
<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
				<img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
				<h2>Contact Us</h2>
				<h4>
					<?php
						if($prompt==false){
							echo "We would love to hear from you ! ";
						}
						else{     
						echo "Thanks For Contacting US";
						}     
					?>
				</h4>
				<a class="button-1" href="login.php" >Admin login Here</a>
			</div>
		</div>
		<div class="col-md-9">
			<form class="contact-form" method="POST">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="fname">First Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="lname">Last Name:</label>
				  <div class="col-sm-10">          
					<input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="comment">Message:</label>
				  <div class="col-sm-10">
					<textarea class="form-control" rows="5" id="comment" name="message"></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>               	
				  </div>
				</div>
			</form>
		</div>
	</div>
</div>


</body>
</html>