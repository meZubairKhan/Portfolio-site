<?php
    /*Template Name: Experience*/
?>

<?php get_header(); ?>

<!-- Style Sheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/experience.css">

<div id="main-content">
<main>
    <section class="experience">
        
        <div class="title">
            <h1>Experience</h1>
            <p class="justPara">My knowledge and expereince with the technologies I've used so far is mentioned down below in detail.</p>

        </div>

        <div class="tech-blocks">
            <div class="tech-block html">
                <div class="tech-logo">
                    <i class="fa-brands fa-html5"></i>
    
                    <h1>HTML</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        Html 5 Structure, Sementic Tags, ol, ul, li, form, input, label, text area etc, id, class, href, src, alt, title.
                    </p>
                </div>
            </div>

            <div class="tech-block css">
                <div class="tech-logo">
                    <i class="fa-brands fa-css3-alt"></i>
    
                    <h1>CSS</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        Selectors, color, fontsize, weight, style, background-color, gradients, margin, padding, border, box model, positioning, flexbox, text alignment, weight, decoration, line height, background images, responsiveness and media queries, transitions, selection etc.
                    </p>
                </div>
            </div>

            <div class="tech-block wordpress">
                <div class="tech-logo">
                    <i class="fa-brands fa-wordpress"></i>
    
                    <h1>Wordpress</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        Understanding of the basic structure of wordpress theme (header, footer, custom pages, basic plugins and wp-admin panel) Understanding of using local host XAMPP, downloading and installing wordpress and making databases for concenered projects.
                    </p>
                </div>
            </div>

            <div class="tech-block php">
                <div class="tech-logo">
                    <i class="fa-brands fa-php"></i>
    
                    <h1>PHP</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        Slight understanding of the php language that is enough to deploy a static theme using wordpress. General understanding of the programming concepts.
                    </p>
                </div>
            </div>

            <div class="tech-block js">
                <div class="tech-logo">
                    <i class="fa-brands fa-js"></i>
    
                    <h1>JavaScript</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        General understanding and practice of the core programming concepts including, variables, datatypes, loops, arrays, operators, conditional statements, functions, classes and objects. Advance concepts like DOM manipulation, Promises, Asynchronous JavaScript, Async Await, Async functions etc.
                    </p>
                </div>
            </div>

            <!-- <div class="tech-block bootstrap">
                <div class="tech-logo">
                    <i class="fa-brands fa-bootstrap"></i>
    
                    <h1>BootStrap</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        ...
                    </p>
                </div>
            </div>

            <div class="tech-block SQL">
                <div class="tech-logo">
                    <i class="fa-solid fa-database"></i>
    
                    <h1>SQL Server</h1>
                </div>
    
                <div class="explanation">
                    <p class="para">
                        ...
                    </p>
                </div>
            </div> -->
        </div>


    </section>


</main>
     
</div>

<?php get_footer(); ?>
