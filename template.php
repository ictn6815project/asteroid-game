<?php
function template_header($title) {

echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1" />
<link rel="icon" href="Images/asteroid.ICO" type="image/gif" sizes="16x16">
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<title>$title</title>
</head>
<body>
	<div id="wrapper">
		  <h1>$title</h1>
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="top-nav">
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-expanded="false">
					<span class="navbar-toggler-icon"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<li><a class="nav-item nav-link" href="index.html">Play the Game</a></li>
						<li><a class="nav-item nav-link" href="Controls.html">Controls</a></li>
						<li><a class="nav-item nav-link active" href="Team.html">Meet the Team</a></li>
					</div>
				</div>
			</div>
		<br/>
EOT;
}
?>
