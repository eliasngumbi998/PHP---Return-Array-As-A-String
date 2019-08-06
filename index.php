<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand" href="<a href="https://eliasngumbipro.com">eliasngumbipro</a>
" rel="nofollow">https://eliasngumbipro.com">eliasngumbipro</a>
</a>		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP - Return Array As A String</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<?php
			$hero = [
				'Marvel' => ['Captain America', 'Iron Man', 'Incredible Hulk', 'Thor', 'Black Widow'],
				'DC' => ['Superman', 'Batman', 'Wonderwoman', 'Flash', 'Aquaman']
			];
 
			if(!ISSET($_POST['convert'])){
		?>
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<pre style='height:400px;'><?php print_r($hero)?></pre>
			</div>
			<form method="POST" action="">
				<center><button name="convert" class="btn btn-primary">Array to String</button></center>
			</form>
		<?php
			}else{
 
				include'string.php';
			}
		?>
	</div>
</body>
</html>
