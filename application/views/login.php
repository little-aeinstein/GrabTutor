<!DOCTYPE html>
<html lang="en">
<head>
  <title>GrabTutor</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/login.css">
  <link rel="stylesheet" href="../../assets/css/fonts.css">
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
</head>
<body id = "_bods">
<div class = "container" id = "_topart">
	<div id = "_logbox">
		<div id = "_logo">
			<img id = "_log" src =  "../../assets/imgs/grablog.png">
		</div>


		<div id = "_logline">
			<div class = "_line" id = "_left"></div>
			<div id = "_cont"> Login </div>
			<div class = "_line" id = "_right"></div>
		</div>

		<div id = "_form">
			<form action = "<?PHP echo base_url('index.php/c_login/validate');?>" method = "post">
				<div id = "_uname">
					<input type = "text" class = "_entry" name = "UNAME" placeholder="Username">
				</div>

				<div id = "_pword">
					<input type = "password" class = "_entry" name = "PNAME" placeholder="Password">
				</div>

				<div id = "_sub">
					<button type = "submit" id = "_submit"> LOGIN TO YOUR ACCOUNT </button>
				</div>


				<?php
					if(isset($GLOBALS["err"]))
						echo '<span id = "error">' . $GLOBALS["err"].'</span>'; 

				?>
			</form>
		</div>
	</div>

</div>

<div class = "container" id = "_bcont">
	<div class = "_abcont">
		<a href = "#"> Terms of Service </a> |
		<a href = "#"> Privacy Policy </a> 
	</div>
	
	<div class = "_copyright">
		© GrabTutor 2017
	</div>
</div>


</body>
</html>