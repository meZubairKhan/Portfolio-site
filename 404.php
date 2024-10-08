<?php
    /*Template Name: 404 Error*/
?>

<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/404.css">

<!-- Main Content Starts Here -->
<main>
    <section class="error-404">
        <img src="<?php echo get_template_directory_uri(); ?>/Images/404.svg" alt="">

        <p class="para">Page you are looking for cannot be found</p>
    </section>
</main>

<?php get_footer(); ?>
