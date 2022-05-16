<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); } ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php get_site_name(); ?> | <?php get_page_clean_title(); ?></title>
<?php get_header(); ?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1" />
<meta http-equiv=”last-modified” content=”<?php get_page_date('Y-m-d'); ?>” />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/screen.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php get_theme_url(); ?>/css/media.css" media="all" />
</head>
<body class="notranslate">
<table border="0" class="layout" cellspacing="0" cellpadding="0">
  <tr>
    <td class="header"><?php get_site_name(); ?></td>
  </tr>
  <tr>
    <td class="menu"><ul><?php get_navigation(return_page_slug()); ?></ul></td>
  </tr>
  <tr>
    <td class="content"><?php get_page_content(); ?></td>
  </tr>
  <tr>
    <td colspan="2" class="footer">&copy; <?php echo date("Y");?> <?php get_site_name(); ?> </td>
  </tr>
</table>
<?php get_footer(); ?>
</body>
</html>
