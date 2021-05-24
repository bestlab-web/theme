<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Paritet
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
<header>
    <div class="navigation">
        <div class="container-lg">
        <div class="row">
            <div class="col-12 col-sm-5">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Услуги
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Услуга 1</a>
                          <a class="dropdown-item" href="#">Услуга 2</a>
                          <a class="dropdown-item" href="#">Услуга 3</a>
                          <a class="dropdown-item" href="#">Услуга 4</a>
                          <a class="dropdown-item" href="#">Услуга 5</a>
                        </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Агентство</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Медиа</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                      </li>
                    </ul>
                  </div>
                </nav>
            </div>
            <div class="col-12 col-sm-2">
            <a href="/" class="logo header-logo"><img src="<?php echo get_template_directory_uri(); ?>/images/main/logo.png" alt=""></a>
            </div>
            <div class="col-12 col-sm-5">
                <a href="#" class="link-search header-link-search"></a>
                <a href="tel:88319999999" class="link-phone header-link-phone">+7 (831) 99-99-999</a>
            </div>
        </div>
        </div>
    </div>
</header>