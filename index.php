<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<div class="row">
			<h1 class="text-center">Weather Scraper</h1>

			<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 center">
				<p class="lead">Enter your city below</p>
				<form>
					<div class="form-group">
						<input type="location" class="form-control" id="location" name="location" placeholder="E.g. London, San Francisco, Toronto" required />
					</div>

					<button id="submit" class="btn btn-primary btn-lg" >Find My Weather</button>
				</form>

				<div id="success"class="alert alert-success">
					Sucess!
				</div>
				
				<div id="fail"class="alert alert-danger">
					Could not find weather data, please try again
				</div>

				<div id="noloc"class="alert alert-danger">
					Please enter a location
				</div>

			</div>
			</div>
		</div>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<script>
			$("#submit").click(function(event){
				event.preventDefault();

				 if ($("#location").val() != ""){
					$.get("scraper.php?location="+$("#location").val(), function( data ){

						if(data.indexOf("Warning") > -1) {
							$(".alert").hide();
							$("#fail").fadeIn();
						} else {

							$(".alert").hide();
							$("#success").html(data).fadeIn();
						}
					});
				} else {
					$(".alert").hide();
					$("#noloc").fadeIn();
				}
			});

		</script>

	</body>
</html>