<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package house
 */

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script>new WOW().init();</script>
    <!-- Required Core Stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/glide.core.min.css">

<!-- Optional Theme Stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/glide.theme.min.css">

	<title>Три хозяйки! Моем! Чистим! Убираем!</title>
	<?php wp_head(); ?>
  </head>
  <body>
    <header>
        <div class="container-fluid">
            <div class="row logo-row">
              <div class="col-md-6">
                <div class="logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Лого">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 wow fadeInLeft">
                <h1 class="main-title">Детальный клининг в Екатеринбурге</h1>
                <p class="sub-title">Аккуратная уборка жилых комплексов, офисов и строительных помещений.  </p>
                <div class="btn-cont">
                    <a href="#" class="header-btn" data-toggle="modal" data-target="#exampleModalCenter">Заказать уборку</a>
                </div>
              </div>
            </div>
        </div>
	</header>
	
	
	
