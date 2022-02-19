<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage pp-v1
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]><html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->        
<head>
<meta charset="utf-8">
<title><?php wp_title(''); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/styles.css?v=1.74">
<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico"><![endif]-->
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-48.png">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon-apple.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700"/>
    
<?php wp_head(); ?>
</head>

<body <?php body_class($setClass); ?>>

<header>  
    <div class="container">
        <div class="logo">
            <a href="/"></a>
        </div>    

        <label id="menuToggle" class="menu-toggle">Menu</label>
        
        <nav id="mainNav" class="main-menu vert-align">
            <div class="wrapper-100 vert-align vert-align--space">
              
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' )); ?>

                <div class="btn-wrapper">
                    <a href="https://app.prodpad.com/login" class="btn btn--outline">Log in</a>
                    <a href="https://app.prodpad.com/signup" class="btn btn--primary" id="navFreeTrialBtn">Start your free trial</a>
                </div>
            </div>
        </nav>
    </div>
    <nav id="secondaryNav" class="secondary-nav" ></nav>
</header>

<div id="main-content">