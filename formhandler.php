<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
		<?php 
			$subject = $_POST["name"];
			if(preg_match('/^[a-zA-Z]{2,}/', $subject)){
				echo "your name is $subject";
			} else{
				echo 'name is unacceptable';
			}
		?><br>
		<?php 
			$subject = $_POST["email"];
			if(preg_match('/^[a-zA-Z][a-zA-Z0-9]{2,}@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/', $subject)){
				echo "your email is $subject";
			} else{
				echo 'email is unacceptable';
			}
		?><br>
		<?php 
			$subject = $_POST["phone"];
			if(preg_match('/^[1]?[\(\ ]?[0-9]{3}\)?\ ?-?[0-9]{3}\ ?-?[0-9]{4}$/', $subject)){
				echo "your phone number is $subject";
			} else{
				echo 'phone number is unacceptable';
			}
		?><br>
		<?php 
			$subject = $_POST["subject"];
			if(preg_match('/^[[a-zA-Z]{2,}$/', $subject)){
				echo "your phone number is $subject";
			} else{
				echo 'no message sent';
			}
		?><br>
		<?php echo $_POST["subject"]; ?><br>
		I just wanted to tell you <?php echo $_POST["message"]; ?><br>
	
</body>
</html>

