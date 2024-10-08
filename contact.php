<?php
    /*Template Name: Contact*/
?>

<?php get_header(); ?>

<!-- Style Sheets -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/utils.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hamburger.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contact.css">

<div id="main-content">
    <!-- Main Content Starts Here -->
    <main>
        <section>
            <div class="title">
                <h1>Contact</h1>
                <p class="para">Liked my work? Wether you need a website for your business or you want to hire me as a developer for your software house, make sure to reach out to me from anou of the methods mentioned down below.</p>
            </div>

            <div class="form-container">
                <form action="">

                    <div class="input-fields">
                        <div class="text-input">
                            <div class="form-input">
                                <label for="fullName">Full Name</label>
                                <input type="text" placeholder="Enter your Full Name" required>
                            </div>
        
                            <div class="form-input">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter your Email" required>
                            </div>
        
                            <div class="form-input">
                                <label for="Whatsapp">Whatsapp</label>
                                <input type="tel" placeholder="Enter your Whatsapp" required>
                            </div>
                        </div>
    
                        <div class="message-input">
                            <label for="message">Message</label>
                            <textarea name="message" id="" placeholder="Type your Message Here"></textarea>
                        </div>
                    </div>

                    <div class="buttonSection">
                        <input type="submit" class="btnPrimary">
                    </div>
                </form>
            </div>
            
        </section>
    </main>  
</div>

<?php get_footer(); ?>
