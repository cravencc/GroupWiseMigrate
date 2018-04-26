<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Craven Community College Email vaildation Portal</title>
<link rel="stylesheet" type="text/css" href="GWStyles.css">
</head>

<body>
	<?php
	
		$employee = $_POST['empName'];
		$userFile = 'GWProjectUsers.txt';
		$act = fopen($userFile, 'a');
		fwrite($act, $employee);
		fclose($act);
	?>	
	<header>
		<div class="containerTop">
			<h2>Craven Community College<br/> Email Validation Portal</h2>
		</div>
	</header>	
	<div class="center">
		<h3>GroupWise Migration to Office 360 vaildation</h3>
		<p>You must vaildate your information for Office 360 Migration.</p>
	</div>	
	<p>Thank you!</p>
	



</body>
</html>