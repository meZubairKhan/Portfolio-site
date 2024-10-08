<?php
    /*Template Name: Portfolio*/
?>

<?php get_header(); ?>

<!-- Style Sheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/portfolio.css">

<div id="main-content">
    
    <!-- Main Content Here -->

    <!-- Heading -->
    <section class="portfolio">
        <h1>Portfolio</h1>

        <p class="justPara">This is a simple portfolio page that showcases my skills and interest in web development, with a short term goal of becoming a front end developer and a log term goal of learning full stack development..</p>
    </section>

    <hr>

    <section>
        <div class="text-section">
            <h1>Calculator!</h1>

            <p class="justPara">This is a web-based calculator project inspired from iPhone Calculator, which is responsive and adapts to different screen sizes. This is a front end project and has no backend logic (as of now). The plan is to learn the backend developement and make it functional.</p>
        </div>

        <div class="calculator-container">
            <div class="calculator">
                <input class="display" type="text" placeholder="0">

                <!-- Buttons -->
                 <div class="buttons">
                    <button class="btn lightColorBtns">c</button>
                    <button class="btn lightColorBtns">+/-</button>
                    <button class="btn lightColorBtns">%</button>
                    <button class="btn primaryColorBtns">÷</button>
                 </div>
                 <div class="buttons">
                    <button class="btn symbol-button">7</button>
                    <button class="btn symbol-button">8</button>
                    <button class="btn symbol-button">9</button>
                    <button class="btn primaryColorBtns">x</button>
                 </div>
                 <div class="buttons">
                    <button class="btn symbol-button">4</button>
                    <button class="btn symbol-button">5</button>
                    <button class="btn symbol-button">6</button>
                    <button class="btn primaryColorBtns">-</button>
                 </div>
                 <div class="buttons">
                    <button class="btn symbol-button">1</button>
                    <button class="btn symbol-button">2</button>
                    <button class="btn symbol-button">3</button>
                    <button class="btn primaryColorBtns">+</button>
                 </div>
                 <div class="buttons">
                    <button class="btn btn-0">0</button>
                    <button class="btn symbol-button">.</button>
                    <button class="btn primaryColorBtns">=</button>
                 </div>
                 <div class="line"></div>
            </div>
        </div>
    </section>

    <hr>
    
    <section>
        <div class="weather-app">
            <div class="container">
                <p class="para">Now</p>
                <div class="temp-icon">
                    <h1 class="temp">8°</h1>
                    <i class="fa-solid fa-cloud-bolt"></i>
                </div>
                <div class="weather-condition">
                    <p class="para">Thunder Storm</p>
                </div>

                <hr>

                <div class="date-location">
                    <p class="para date">September 27th, 2024</p>
                    <p class="para location">Lahore</p>
                </div>
            </div>
        </div>

        <div class="text-section">
            <h1>Weather App!</h1>
            <p class="justPara">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsa officiis tenetur debitis magni porro facere, corporis sint cumque. Animi dolorum necessitatibus sed. Tempore dolorem dolor recusandae, optio explicabo totam voluptas.</p>
        </div>
    </section>
    
    <script src="calculator.js"></script>

</div>

<?php get_footer(); ?>
