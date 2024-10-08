<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title(); ?></title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Montserrat Google Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Logo Font Adu Australia VIC WA NT Hand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+AU+VIC+WA+NT+Hand:wght@400..700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/Images/favicon.jpg" type="image/x-icon">

    <title>Learning HTML CSS</title>


    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Starts Here -->
<header>
    <div class="announcement-bar">
        <p class="para">Open to Work!</p>
    </div>
    <div class="nav-bar">
        <input id="burger" type="checkbox">
        <label for="burger" class="nav-bar-closed"><i class="fa-solid fa-bars"></i></label>
        
        <nav class="nav-bar-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/Images/ZK_Logo.png" alt="">
        </nav>
        
        <nav class="nav-bar-links">
            <label for="burger" class="nav-bar-open">
                <i class="fa-solid fa-xmark"></i>
            </label>
            <a href="home" class="nav-anchor">Home</a>
            <a href="experience" class="nav-anchor">Experience</a>
            <a href="portfolio" class="nav-anchor">Portfolio</a>
            <a href="contact" class="nav-anchor">Contact</a>
        </nav>
        <nav class="nav-bar-icons">

            <a href="https://www.linkedin.com/in/zubairkhanunity/" target="_blank"><i class="fa-brands fa-linkedin-in social-icons"></i></a>
            <a href="https://github.com/meZubairKhan" target="_blank"><i class="fa-brands fa-github social-icons"></i></a>
            <a href="https://wa.me/+923216614593" target="_blank"><i class="fa-brands fa-whatsapp social-icons"></i></a>
        </nav>
    </div>
</header>