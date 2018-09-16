<!doctype html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Widget</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&amp;subset=latin-ext" rel="stylesheet">

	<link rel="stylesheet" href="LatoLatin/latolatinfonts.css">
	<link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

</head>





<body>
	<div class="container justify-content-center align-items-center d-flex main p-0">
		<div class="col-md-6  col-lg-4 widget ">
			<div class="widget-container m-0">


				<div class="user row">
					<div class="user_container w-100 ">
						<div class="photo_change d-flex align-items-center justify-content-between ">
							<a href=""><i class="icon-arrow-left arrow"></i></a>
							<div class="photo_container d-flex justify-content-center align-items-center ">
								<div class="photo_c2">
									<img class="photo" src="assets/photo1.png" alt="portrait">
								</div>
							</div>
							<a href=""><i class="icon-arrow-right arrow"></i></a>
						</div>
						<h1 class="text-center"><span id="name"></span> <span id="lastname"></span></h1>
						<h2 class="text-center pt-2"><span id="company"></span></h2>
					</div>
				</div>






				<div class="row icons m-auto d-flex justify-content-center align-items-center ">
					<div class="icons_container justify-content-between d-flex">
						<div class="icon d-flex flex-column justify-content-center align-items-center">
							<i class="icon-people yellow-circle"></i>
							<h3 class=" mb-0">658</h3>
							<h4 class="font-weight-light text-uppercase ">followers</h4>
						</div>
						<div class="icon d-flex flex-column justify-content-center align-items-center">
							<i class="icon-camera"></i>
							<h3 class="bigger-font">6529</h3>
							<h4 class="font-weight-light text-uppercase mb-0">photos</h4>
						</div>
						<div class="icon d-flex flex-column justify-content-center align-items-center">
							<i class="icon-like pink-circle"></i>
							<h3 class="bigger-font">79</h3>
							<h4 class="font-weight-light text-uppercase mb-0">likes</h4>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="bootstrap-4/js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<script>
		$(document).ready(function() {
			$.ajax({
				method: 'GET',
				url: 'dbh.php',
				dataType: 'json'
			}).done(function(data) {
				var random = Math.floor(Math.random() * data.users.length);
				$("#name").text(data.users[random].name);
				$("#lastname").text(data.users[random].lastname);
				$("#company").text(data.users[random].company);

			});
		});

	</script>

</body>

</html>
