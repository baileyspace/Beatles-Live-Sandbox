<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo settings('site_title'); echo $title ? ' | ' . $title : ''; ?></title>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo settings('description'); ?>" />

<?php echo auto_discovery_link_tag(); ?>

<!-- Stylesheets -->
<!--<link rel="stylesheet" media="screen" href="<?php //echo html_escape(css('screen')); ?>" /> -->
<link rel="stylesheet" media="screen" href="<?php echo html_escape(css('colour')); ?>" />
<link rel="stylesheet" media="print" href="<?php echo html_escape(css('print')); ?>" />

<!-- JavaScripts -->
<?php echo js('default'); ?>

<!-- Plugin Stuff -->
<?php echo plugin_header(); ?>

</head>
<body<?php echo $bodyid ? ' id="'.$bodyid.'"' : ''; ?><?php echo $bodyclass ? ' class="'.$bodyclass.'"' : ''; ?>>
	<div id="wrap">

		<div id="header">
				
				<div id="search-wrap">
					<?php echo simple_search(); ?>
					<?php echo link_to_advanced_search(); ?>
				</div>
				<?php echo link_to_home_page('View Public Site',array('id'=>'bllogo')); ?>
				<ul class="navigation"> <?php echo public_nav_main(array('Home' => uri(''), 'Browse Items' => uri('items'), 'Go On Tour'=>uri('collections')));?></ul>				
		</div>
		
		<div id="content">