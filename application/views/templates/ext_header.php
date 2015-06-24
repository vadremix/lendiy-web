<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $project['page_title']; ?> - <?php echo $project['name']; ?></title>

		<link href="<?php echo $project['base_path']; ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $project['base_path']; ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
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
					<div class="navbar-form navbar-right">
						<button class="btn btn-success">Sign up</button>
						<button class="btn btn-primary">Sign in</button>
					</div>
				</div><!--/.navbar-collapse -->
			</div>
		</nav>