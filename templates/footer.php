<?php get_template_part('templates/partial', 'sponsors'); ?>

        <footer>
            <div class="uk-container">
            
                <div class="uk-grid">
                    <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m uk-margin-xlarge-bottom">
                        <h5>Contact Us</h5>
                        
                        <p class="uk-margin-bottom">
                            Lemon Tree Trust<br />
                            Registered office<br />
                            123 Lorem Ipsum<br />
                            London NW1 1EY
                        </p>
                
                        <p class="uk-margin-bottom-small"><a href="mailto:info@lemontreetrust.org">info@lemontreetrust.org</a></p>
                        <p><a href="tel:020712341234">0204 1234 1234</a></p>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m uk-margin-xlarge-bottom">
                        <h5>Follow Us</h5>
                        
                        <div class="uk-grid uk-grid-medium">
                            <div><a href="" uk-icon="icon: twitter; ratio: 2"></a></div>
                            <div><a href="" uk-icon="icon: facebook; ratio: 2"></a></div>
                            <div><a href="" uk-icon="icon: youtube; ratio: 2"></a></div>
                            <div><a href="" uk-icon="icon: instagram; ratio: 2"></a></div>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m uk-margin-xlarge-bottom">
                        <h5>Newsletter</h5>
                        
                        <?php echo do_shortcode('[mc4wp_form id="942"]'); ?>
                    </div>
                </div>
            
                <div class="sub-footer">
                    <div class="uk-flex uk-flex-middle uk-flex-wrap">
                        
                        <div>
                            <p>&copy; 2017 Lemon Tree Trust 2017</p>
                        </div>
                        <div>
                            <p><a href="#">Privacy Policy</a></p>
                        </div>
                        <div>
                            <p><a href="#">Terms and Conditions of Use</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    
        <div id="offcanvas" uk-offcanvas="mode: slide; flip: true; overlay: true;">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    
                    <?php          
                    $defaults = array(
                        'menu'              => 'Main Nav',
                        'theme_location'    => 'primary_navigation',
                        'container'         => '',
                        'items_wrap'        => '%3$s'
                    );

                    wp_nav_menu($defaults); 
                    ?>
                                        
                    <li><a href="#" uk-toggle="target: #search">Search</a></li>
                </ul>
            </div>
        </div>
        
        <div id="search" clas="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                <form action="/" method="get">
                    <input type="text" name="s" class="uk-input uk-margin-small-bottom" placeholder="Search for something" value="<?php the_search_query(); ?>">
                    <button type="submit" class="uk-button uk-button-primary">Search</button>
                </form>
            </div>
        </div>


