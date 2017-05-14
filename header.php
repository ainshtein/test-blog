<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title><?php bloginfo('name'); ?></title>
<?php wp_head(); ?>
</head>

<body>
<div class="head-wrapper">
	<div class="head">
    	<div class="head-logo"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg" alt="" /></div>
        <div class="head-banner"><img src="<?php bloginfo('template_url'); ?>/images/728x90.jpg" alt="" /></div>
    </div>
</div>
<div class="menu-wrapper">
	<div class="menu-main">
<?php if(!dynamic_sidebar('menu_header')): ?>
    <span>Это область меню, добавляемого из виджетов</span>
<?php endif; ?>        

        <ul class="ico-social">
        	<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/images/ico-vk.png" alt="мы вконтакте" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-youtobe.png" alt="канал youtobe" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-facebook.png" alt="мы на facebook" /></a></li>
            <li><a href="#"><img src="<?php bloginfo('template_url'); ?>/images/ico-twitter.png" alt="наш twitter" /></a></li>
        </ul>    
    </div>
</div>