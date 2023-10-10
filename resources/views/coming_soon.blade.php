<!DOCTYPE html>
<html lang="en">
<head>
  
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken Theme">
  
	<title>Coming Soon</title>
  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
  
	<link href="comingsoon/css/bootstrap.min.css" rel="stylesheet" media="screen">
  
	<link href="comingsoon/css/font-awesome.min.css" rel="stylesheet" media="screen">
  
	<link href="comingsoon/css/custom.css" rel="stylesheet" media="screen">
</head>
<body>
  
  
	<div class="comming-soon">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="coming-soon-box">
  
						<div class="logo">
							<h1>Website Name</h1>
						</div>
  
  
						<div class="coming-text">
							<p>Keep calm, we are</p>
							<h2><span class="typed-title">Launching in</span></h2>
							<div class="typing-title">
								<p>Launching in</p>
								<p>Coming Soon</p>
							</div>
						</div>
  
  
  
						<div class="countdown-timer-wrapper">
							<div class="timer" id="countdown"></div>
						</div>
  
  
  
						<div class="newsletter">
							<p>The future has a way of arriving unannounced.</p>
							<div class="newsletter-form">
								<form action="/email" method="post">
									@csrf
									<input name="email" type="text" class="new-text" placeholder="Enter your email address...." required />
									<button type="submit" class="new-btn">Notify Me</button>
								</form>
							</div>
						</div>
  
  
  
						<div class="social-link">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
  
					</div>
				</div>
			</div>
		</div>
	</div>
  
  
  
	<script src="comingsoon/js/jquery-1.12.4.min.js"></script>
  
	<script src="comingsoon/js/countdown-timer.js"></script>
  
	<script src="comingsoon/js/typed.js"></script>
  
	<script src="comingsoon/js/SmoothScroll.js"></script>
  
	<script src="comingsoon/js/bootstrap.min.js"></script>
  
	<script src="comingsoon/js/function.js"></script>
  
	<script>
        $(document).ready(function (){
			//var myDate = new Date("08/04/2019");
			var myDate = new Date();
			myDate.setDate(myDate.getDate() + 2);
            $("#countdown").countdown(myDate, function (event) {
                $(this).html(
                    event.strftime(
                        '<div class="timer-wrapper"><div class="time">%D</div><span class="text">Days</span></div><div class="timer-wrapper"><div class="time">%H</div><span class="text">Hours</span></div><div class="timer-wrapper"><div class="time">%M</div><span class="text">Minutes</span></div><div class="timer-wrapper"><div class="time">%S</div><span class="text">Seconds</span></div>'
                    )
                );
            });
  
        });
    </script>
  
</body>
</html>