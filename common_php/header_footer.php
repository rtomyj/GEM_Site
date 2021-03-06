<?php
/*
	Contains two methods - printHeader, printFooter.
	Both methods will print the header and footer part of each web page as all pages will be similar in structure.
*/


/*
	Prints the title of the page, the navigation bar and sets up Bootstrap and custom CSS attributes/scripts.
	Parameter title should be a string that describes what the page is. If a user opens multiple tabs the title will be the text displayed on our tabs. Should be unique per page.
*/
function printHeader($title){
?>
	<!DOCTYPE html>
	<html lang='en-US'>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
		<link rel='stylesheet' href='styles/bootstrap.css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

		<link rel='stylesheet' type='text/css' href='styles/styles.css'>
	</head>
	<body class='body body_attributes'>
		<div class='justify-content-center w3-flat-belize-hole'>
				<nav class='navbar navbar-expand-sm navbar-dark' >
					<a class="navbar-brand" href="index.php"><img src="res/gem_logo.png" width="30" height="30" alt="" style='margin-right: 10px'>GEM System</a>
					<ul class='navbar-nav'>
						<li class='nav-item active'>
							<a HREF='index.php' class='nav-link'>Home</a>
						</li>
						<li class='nav-item active dropdown'>
							<a class="nav-link dropdown-toggle" href="#" id="createDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
							<div class="dropdown-menu" aria-labelledby="createDropdown">
								<a class="dropdown-item" href="create_agent.php">Agent</a>
								<a class="dropdown-item" href="create_artist.php">Artist</a>
								<a class="dropdown-item" href="create_event.php">Event</a>
							</div>
						</li>
						<li class='nav-item active dropdown'>
							<a class="nav-link dropdown-toggle" href="#" id="generateDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Generate</a>
							<div class="dropdown-menu" aria-labelledby="generateDropdown">
									<a class="dropdown-item" href="generate_event_status.php">Generate Event Status</a>
							</div>
						</li>
						<li class='nav-item active mx-auto'>
							<a HREF='approve.php' class='nav-link'>Approve Events</a>
						</li>
					</ul>
				</nav>
		</div>

<?php
}






/*
	Prints inormation on each page such as copyright info and provides links to Yin's website.
	Also ends the html document.
*/
function printFooter(){
?>
<footer class='footer'>
		<p>Copyright 2018 &copy;
				GEM.
				All rights reserved. <br>
				Designed and maintained by Javi Gomez & Zach Dick.
		</p>
</footer>
</body>
</html>
<?php

}

?>
