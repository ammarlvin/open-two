<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slick-theme.css">

    <?php wp_head();?>
    <title>Open VC</title>
</head>
<body>
    <!-- header -->

    <header>
        <a href=""><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/Group 5.png" alt=""></a>
        <div class="hamburger">
            <span></span>
        </div>
        <ul class="menu">
            <li><a href="#">Explore</a></li>
            <li><a href="#">For Founders</a></li>
            <li><a href="#">For Investors</a></li>
            <button class="btn" >Sign Up</button> 
        </ul>
       
    </header>

    <!-- end header -->