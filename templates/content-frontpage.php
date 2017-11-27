 <?php 
 get_template_part('templates/partial', 'owlcarousel'); ?>
    
        <!-- Intro -->
    <div class="home-content yellow uk-padding" style="background-color: #fbef85;">
         <div class="uk-container">
               <?php the_content(); ?>
               </div>
           </div>

        <div class="uk-section intro bg_squiggle">
     
            <div class="uk-container">
                 <?php get_template_part('templates/partial', 'blocks'); ?>
            </div>  
        </div>

        <?php get_template_part('templates/partial', 'featured'); ?>
        
        
        
        <!-- Support -->
        <div class="uk-section support bg_squiggle">
            <div class="uk-container">
            
                <h1>Support us:</h1>
            
                <div class="uk-grid uk-margin-medium-top">
                    <div class="uk-width-1-1 uk-width-1-3@m uk-margin-medium-bottom">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/icon_donate.png" class="uk-align-center">
                        <a href="#">Donate</a>
                        <a href="#" class="uk-button uk-button-primary">Donate</a>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-3@m uk-margin-medium-bottom">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/icon_fundraiser.png" class="uk-align-center">
                        <a href="#">Become a Fundraiser</a>
                        <a href="" class="uk-icon-button" uk-icon="icon: chevron-right"></a>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-3@m uk-margin-medium-bottom">
                        <img src="<?php echo bloginfo('template_url'); ?>/img/icon_faq.png" class="uk-align-center">
                        <a href="#">Frequently Asked Questions</a>
                        <a href="" class="uk-icon-button" uk-icon="icon: chevron-right"></a>
                    </div>
                </div>                
            </div>
            <div class="fade">&nbsp;</div>
        </div>
        <!-- END Support -->