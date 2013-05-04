<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>
		Practice Room - The best place on the internet to buy your lyrics.
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="The best place on the internet to buy your lyrics.">
	<meta name="author" content="Jordan Walsh">

	<!-- Le styles -->
	<?php //echo $this->Html->css('bootstrap'); ?>
	<?php echo $this->Html->css('bootstrap'); ?>
	<style>
	body {
		padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
	}
	</style>
	<?php //echo $this->Html->css('bootstrap-responsive.min'); ?>
	<?php echo $this->Html->css('bootstrap-responsive'); ?>
	<?php echo $this->Html->css('custom'); ?>
	<?php echo $this->Html->css('datepicker'); ?>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Le fav and touch icons -->
	<!--
	<link rel="shortcut icon" href="/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
	-->
	<?php
	echo $this->fetch('meta');
	echo $this->fetch('css');

	$homeUrl = $this->Html->url(array("controller" => "users", "action" => "index"));
	$aboutUrl = $this->Html->url(array("controller" => "users", "action" => "about"));
	$contactUrl = $this->Html->url(array("controller" => "users", "action" => "contact"));
	?>
</head>

<body>

	<div class="navbar navbar-fixed-top">
    	<div class="navbar-inner">
        	<div class="container">
            	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              		<span class="icon-bar"></span>
              		<span class="icon-bar"></span>
              		<span class="icon-bar"></span>
            	</button>
            	<a class="brand" href="#">Practice Room</a>
            	<div class="nav-collapse collapse">
            		<ul class="nav">
                		<li><a href="<?php echo $homeUrl ?>">Home</a></li>
                		<li><a href="<?php echo $aboutUrl ?>">About</a></li>
                		<li><a href="<?php echo $contactUrl ?>">Contact</a></li>
              		</ul> 

              		<?php 

              		$user = AuthComponent::user();
              		$username = "";
              		//Debugger::dump($username);

              		if (is_array($user)) { 

              			if(array_key_exists('User',$user)) {
							$user = $user['User'];
              			}

              			//Debugger::dump($user);

              			$username = $user['username'];
              		}

              		if($username != "") {

              			$profileUrl = $this->Html->url(array("controller" => "users", "action" => "profile"));
              			$competitionsUrl = $this->Html->url(array("controller" => "competitions", "action" => "index"));
              			$logoutUrl = $this->Html->url(array("controller" => "users", "action" => "logout"));

              		?>

					<ul class="nav pull-right">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo $username; ?><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $profileUrl; ?>">View Profile</a></li>
								<li><a href="<?php echo $competitionsUrl; ?>">My Competitions</a></li>
								<li><a href="<?php echo $logoutUrl; ?>">Log out</a></li>
							</ul>
						</li>
					</ul>

					<?php } ?>
            	</div><!--/.nav-collapse -->
          	</div>
        </div>
    </div>

	<div class="container">

		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Session->flash('auth'); ?>

		<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

	<!-- Le javascript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<?php echo $this->Html->script('bootstrap.min'); ?>
	<?php echo $this->Html->script('bootstrap-datepicker'); ?>
	<?php echo $this->Html->script('custom'); ?>
	<?php echo $this->fetch('script'); ?>

</body>
</html>
