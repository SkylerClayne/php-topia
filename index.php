<?php 

	if($_POST["submit"]){
		
		// HTML5 Does the required checking.
		if(isset($_POST["name"], $_POST["email"], $_POST["message"])) {
			if (mail("skylerclayne@gmail.com", "You've received a message from ".$_POST['name'], "Name: ".$_POST['name']."Email: ".$_POST['email']."Message: ".$_POST['message'])) {
	        	$result='<div class="alert alert-success"><strong>Thank you!</strong> I\'ll be in touch.</div>';
			} else {
	    		$result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
			}
		}
	            		
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Simple PHP Contact Form</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Example PHP Contact Form</h1>

	           	<form method="POST" role="form">
				<legend>Contact Form</legend>

				<?php echo $result; ?> 

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="John Snow" value="<?php echo $_POST['name']; ?>" required />

				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="johnsnow@thewall.org" value="<?php echo $_POST['email']; ?>" required />
				</div>

				<div class="form-group">
					<label for="message">Message</label>
					<textarea class="form-control" id="message" name="message" placeholder="Winter is Coming" required><?php echo $_POST['message']; ?></textarea>
				</div>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary" />

			</form>

			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		</div>
	</body>
</html>