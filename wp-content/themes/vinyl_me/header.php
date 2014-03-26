<?php
/**
 * The Header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>
    <?php bloginfo('name'); ?>
	</title>
	
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/font-awesome.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/bootstrap.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/mailchimp_embedd.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/style.css" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
</head>

<nav class='navbar navbar-default navbar-fixed-top main-nav no-margin-bottom' role='navigation'>
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class='container'>
    <div class='navbar-header padding-bottom margin-bottom'>
      <button class='navbar-toggle' data-target='#bs-example-navbar-collapse-1' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='<?php echo get_option('home'); ?>'>
        <div class='logo'></div>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav navbar-right'>
        <li>
          <a class='btn btn-default navbar-btn' href='/request_invite.html'>Request an invite</a>
        </li>
      </ul>
      <?php wp_nav_menu( array('menu' => 'Main', 'container' => '', 'items_wrap' => '<ul class="nav navbar-nav navbar-right">%3$s</ul>' )); ?>
    </div>
  </div>
</nav>