<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
		<?php 
			$subject = $_POST["name"];
			$pattern = /^[a-zA-Z]+;
			echo $_POST["name"]; 
		?><br>
		Your email is: <?php echo $_POST["email"]; ?><br>
		Your phone number is <?php echo $_POST["phone"]; ?><br>
		<?php echo $_POST["subject"]; ?><br>
		I just wanted to tell you <?php echo $_POST["message"]; ?><br>
	
</body>
</html>

