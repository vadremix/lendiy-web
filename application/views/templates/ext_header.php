<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $project['page_title']; ?> - <?php echo $project['name']; ?></title>

		<link href="<?php echo $project['base_path']; ?>assets/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo $project['base_path']; ?>assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="<?php echo $project['base_path']; ?>assets/css/lendiy.css" rel="stylesheet">
	</head>

	<body>
		<div class="wrapper">
			<div id="navbar-transform"></div>

			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo $project['base_path']; ?>"><?php echo $project['name']; ?></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<div class="nav navbar-nav navbar-right">
							<button class="navbar-btn btn btn-success">Sign up</button>
							<button class="navbar-btn btn btn-primary navbar-right-spacing">Sign in</button>
						</div>
					</div>
				</div>
			</nav>