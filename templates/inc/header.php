<html>
  <head>
    <title>Joblister</title>
    <link href="library/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="library/dist/css/jumbotron-narrow.css" rel="stylesheet"/>
    <link href="library/dist/css/style.css"  rel="stylesheet"/>
  </head>
<body>
	<div class="container">
		<div class="header">
		      <nav>
		        <ul class="nav nav-pills pull-right">
		          <li role="presentation" ><a href="index.php">Home</a></li>
		          <li role="presentation"><a href="create.php">Create Listing</a></li>
		        </ul>
		      </nav>
		      <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
		</div>
		<?php displayMessage(); ?>