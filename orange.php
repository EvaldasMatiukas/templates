<!DOCTYPE html>
<html>
<head>
<title>Evaldo puslapis</title>
<link   >
</head>
<body>
<body style="background-color: orange">
<div class="container">
	<div=class="row">
		<div=class="col-md-12"><h1>Header</div>
	</div>
		<div=class="row">
		<div=class="col-md-12"><h1><?=$content; ?></div>
				<div=class="col-md-4">
				<?php 
				include "template_selector.php";
				include "username.php";?></div>

		
	<div=class="row">
		<div=class="col-md-12"><?php include "inc/footer.php"; ?></div>
		</div>
	</div>
</body>
</html>