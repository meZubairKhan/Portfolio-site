<?php
    /*Template Name: Home*/
?>

<?php get_header(); ?>

<!-- Style Sheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<div id="main-content">
    <!-- Main Section Starts Here -->
<main>
    <!-- Hero Section Starts Here -->
    <section class="hero">
        
        <div class="hero-1">
            <h1>Web Design?<br><span>It's My Passion!</span></span></h1>
        </div>
        
        <div class="hero-2">
            <p class="justPara">I love the art of web design and the challenge of turning complex concepts into intuitive, user-friendly interfaces.</p>

            <div class="hero-btns">
                <a href="contact">
                    <button class="btnPrimary">Contact Me</button>
                </a>
                <a href="https://drive.google.com/file/d/1ezVpqBKt-gcRM5fFb6kKlx7Bp0zeTvR4/view?usp=sharing" target="_blank">
                    <button class="btnSecondary"><i class="fa-solid fa-down-long"></i> Resume</button>
                </a>
            </div>
        </div>
    </section>

    <hr>

    <section class="professional-work">
        <h2>Professional Work</h2>
        
        <div class="company-logos">
            <a href="https://www.affluora.co">
                <img src="<?php echo get_template_directory_uri(); ?>/Images/Logo_White.png" alt="">
            </a>

            <a href="https://www.netflow.com.pk">
                <img src="<?php echo get_template_directory_uri(); ?>/Images/Netflow white logo.png" alt="">
            </a>
        </div>

        <p class="para">
            My portfolio showcases my expertise in crafting visually stunning and functional websites. I've had the opportunity to work on a variety of projects, including static websites for Affluora.co and Netflow.com.pk. Through these experiences, I've honed my skills in HTML, CSS and a little bit of JavaScript, responsive design and developed a keen eye for detail.
        </p>
    </section>

    <hr>

    <section class="experience">
        <h2>Experience</h2>

        <div class="experience-logos">
            <div class="tech-logos html">
                <i class="fa-brands fa-html5 html"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>

            <div class="tech-logos css">
                <i class="fa-brands fa-css3-alt"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>

            <div class="tech-logos wordpress">
                <i class="fa-brands fa-wordpress"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>

            <div class="tech-logos php">
                <i class="fa-brands fa-php"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>

            <div class="tech-logos js">
                <i class="fa-brands fa-js"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>

            <div class="tech-logos bootstrap">
                <i class="fa-brands fa-bootstrap"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>

            <div class="tech-logos SQL">
                <i class="fa-solid fa-database"></i>
                <div class="pop-up">
                    <p class="para">Lorem ipsum dolor!</p>
                </div>
            </div>    
        </div>

        <p class="para">
            With a strong foundation in web development fundamentals, I've gained proficiency in HTML, CSS, JavaScript, WordPress, PHP, SQL Server, Bootstrap. Please click the view more button to read more about my skills in the above mentioned webtechnologies.
        </p>

        <div class="buttonSection">
            <a href="experience"><button class="btnPrimary">View More</button></a>
        </div>
    </section>

    <hr>
    
    <section class="educational-background">
        <h2>Educational Background</h2>

        <h3> <i class="fa-solid fa-graduation-cap"></i> Bachelors (2019-23)</h3>
        <p class="justPara">
            Stayed a BS Computer Science student at Lahore Garrison University from spring of 2019 to fall of 2023, presented Zombie Shooter 2.5D game as my <a href="#fyp">Final Year Project</a> which earned me a top position in my entire badge. Secured my final CGPA as 2.98. Learnt Unity 3D, C#, C++ (programming basics), HTML, CSS and XAMPP.
        </p>
        
        <h3> <i class="fa-solid fa-building-columns"></i> Inter - Pre-Engineering (2015-17)</h3>
        <p class="justPara">
            Started FSc. Pre-Engineering at Punjab Group of Colleges, securing 65% marks in annual Board of Intermediate and Secondary Education (BISE Lahore) exams.
        </p>
        
        <h3> <i class="fa-solid fa-pencil"></i> Matriculation (2014-15)</h3>
        <p class="justPara">
            Completed matriculation from Lahore Public School in 2014-15, securing 70% marks in annual Board of Intermediate and Secondary Education (BISE Lahore) exams.
        </p>
        
    </section>

    <hr>

    <section id="fyp">
        <h2>Final Year Project</h2>
        
        <div class="embed-link">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/TPvG-jc9dso?si=_dskPtS4btiu4Pzn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>

        <p class="para">Developed a zombie shooter game using Unity game engine as my final year project. I got A grade in my final year project and topped my entire academic badge. Here are some details about the project:</p>

        <p class="justPara">1. Dimensionality: 2.5D</p>
        <p class="justPara">2. Character controller</p>
        <p class="justPara">3. Enemy AI</p>
        <p class="justPara">4. Shooting System</p>
        <p class="justPara">5. Player Health System</p>
        <p class="justPara">6. Player Collectables</p>
        <p class="justPara">7. Scoring System</p>
        <p class="justPara">8. Animaed Main Menu</p>

    </section>

    <!-- <hr>

    <section>
        <h2>Lorem ipsum</h2>
        <p class="para">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus unde modi qui, perspiciatis optio libero aperiam distinctio error provident? Ad eveniet aspernatur sapiente nesciunt est delectus ut ipsum sit impedit!
        </p>
    </section> -->
</main>
     
</div>

<?php get_footer(); ?>