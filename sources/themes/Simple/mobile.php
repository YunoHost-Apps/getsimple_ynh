<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php get_site_name(); ?> | <?php get_page_clean_title(); ?></title>
<?php get_header(); ?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
<meta name="theme-color" content="#fafafa" />
<meta http-equiv=”last-modified” content=”<?php get_page_date('Y-m-d'); ?>” />
<meta name="msapplication-navbutton-color" content="#fafafa" />
<meta name="apple-mobile-web-app-status-bar-style" content="#fafafa" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/mobile.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/media.css" media="all" />
<script src="<?php get_theme_url(); ?>/js/menu.js" type="text/javascript"></script> 
</head>
<body class="notranslate">
<table border="0" class="layout" cellspacing="0" cellpadding="0">
  <tr>
    <td class="header"><?php get_site_name(); ?></td>
    <td class="topmenu" valign="middle"><a class="toggle" href="#links">&#9776; Menu</a></td>
  </tr>
  <tr>
    <td colspan="2" class="menu">
	<div class="toggle-content" id="links">
	<ul><?php get_navigation(return_page_slug()); ?></ul>
	</div>
	</td>
  </tr>
  <tr>
    <td colspan="2" class="content"><?php get_page_content(); ?></td>
  </tr>
  <tr>
    <td colspan="2" class="footer">&copy; <?php echo date("Y");?> <?php get_site_name(); ?> </td>
  </tr>
</table>
<?php get_footer(); ?>
</body>
</html>
