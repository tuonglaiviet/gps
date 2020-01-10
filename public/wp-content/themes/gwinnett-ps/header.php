<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gwinnett_PS
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
	<div class="header__container">
		<a href="<?php bloginfo('home') ?>" title="<?php bloginfo('name') ?>" class="header__logo">
			<img src="<?php bloginfo('template_directory') ?>/images/Group 278.png" title="<?php bloginfo('name') ?>" alt="<?php bloginfo('name') ?>"/>
		</a>
		<div class="header__intro">
			<ul>
				<li><a href="tel:7709950630" class="header__intro__phone">770.995.0630</a></li>
				<li><a href="#">Accepted insurance</a></li>
				<li><a href="#">Make a payment</a></li>
				<li>
					<div class="header__search">
						<form  role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('home') ?>" method="get">
							<input type="text" name="f" id="search" value="" class="header__search--text" placeholder="Searh our site"/>
							<input type="image" alt="Search" src="<?php bloginfo('template_directory') ?>/images/icon-search.png" alt="search" class="header__search--button" />
						</form>
					</div>
				</li>
			</ul>
		</div>
		<span class="header__menubuton">
			<span></span>
		</span>
		<nav class="header__menu">
			<?php 
				wp_nav_menu(array(
					'container' => '',
					'menu_id' => 2,
				));
			?>
		</nav>
	</div>
</header>
