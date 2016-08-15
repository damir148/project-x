<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>myAccount | Welcome</title>
<link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
<link href='http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
				<div class="row column">
					<br>
					<img class="thumbnail" src="http://placehold.it/550x350">
					<h5>myAccount</h5>
					<ul class="vertical menu">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Sign Up</a></li>
					  <li><a href="#">Sign In</a></li>
					</ul>
				</div>
			</div>

			<div class="off-canvas-content" data-off-canvas-content>
				<div class="title-bar hide-for-large">
					<div class="title-bar-left">
						<button class="menu-icon" type="button" data-open="my-info"></button>
						<span class="title-bar-title">myAccount</span>
					</div>
				</div>
				
				<div class="callout primary">
					<div class="row column text-center">
						<h1>myAccount</h1>
						<h2 class="subheader">A simpler way to do things.</h2>
					</div>
				</div>
				<div class="row medium-8 large-7 columns">
					<h3>Add your contact details</h3>
					<p>List any contact details you'd like featured in your ad so customers can get in touch.</p>

					<div class="callout">
						<div class="success progress" role="progressbar" tabindex="0" aria-valuenow="25" aria-valuemin="0" aria-valuetext="25 percent" aria-valuemax="100">
						  <div class="progress-meter" style="width: 25%">
						    <p class="progress-meter-text">25%</p>
						  </div>
						</div>
					</div>
					
					<hr>
					
					<form>
					  <label>Email address
					    <input type="text" placeholder="example@example.com" aria-describedby="exampleHelpText">
					  </label>
					  <label>Phone number
					    <input type="text" placeholder="" aria-describedby="exampleHelpText">
					  </label>
					  <label>Facebook URL
					    <input type="text" placeholder="facebook.com/you" pattern="url">
			          </label>
					  <label>Twitter URL
					    <input type="text" placeholder="twitter.com/you" pattern="url">
			          </label>
					  <label>Website URL
					    <input type="text" placeholder="example.com" pattern="url">
			          </label>
					  <label>Postal address
					    <textarea placeholder="Enter your Postal address"></textarea>
			          </label>
					  <label>Opening hours
						  <div class="slider" data-slider data-initial-start='25' data-initial-end='75'>
						    <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
						    <span class="slider-fill" data-slider-fill></span>
						    <span class="slider-handle" data-slider-handle role="slider" tabindex="1"></span>
						    <input type="hidden">
						    <input type="hidden">
						  </div>
					  </label>
		  
					  <div class="input-group">
						<a class="expanded button alert" href="#">Skip</a>
						<a class="expanded button" href="#">Next</a>
					  </div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
      $(document).foundation();
</script>
<script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
</body>
</html>
