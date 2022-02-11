
    <footer class="site-footer">
        <div class="container">
            <div class="inner-site-footer">
                <div class="column-footer link-footer">
                    <?php
                        wp_nav_menu( 
                          array( 
                              'theme_location' => 'menu-popup', 
                              'container' => 'false', 
                              'menu_id' => 'header-menu', 
                              'menu_class' => 'menu'
                           ) 
                        );
                    ?>   
                </div>
                <div class="column-footer logo-footer">
                    <?php if(!empty(get_field('logo_footer_landing','option'))) {
                        echo '<img src="'.esc_url(get_field('logo_footer_landing','option')['url']).'" alt="Logo">';
                    } ?>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php wp_footer(); ?>
<div class="popup-sent-email" style="display: none;">
    <div class="inner-popup">        
        <div class="popup-header">
            <div class="container">
                <a href="<?php if(!empty(get_field('link_popup','option'))) { echo get_field('link_popup','option'); } else { echo home_url(); } ?>" class="logo">
                    <?php if(!empty(get_field('logo_popup','option'))) {
                        echo '<img src="'.esc_url(get_field('logo_popup','option')['url']).'" alt="Logo">';
                    } ?>
                    
                </a>
            </div>
        </div>
        <div class="wrap-popup">
            <button class="close-popup"></button>
            <div class="body-popup">
                <div class="block-title">
                    <div class="image-column">
                        <?php if (!empty(get_field('left_image_popup','option'))) {
                            echo '<img src="'.esc_url(get_field('left_image_popup','option')['url']).'" alt="images" />';
                        } ?>
                        <?php if (!empty(get_field('icon_check_popup','option'))) {
                            echo '<div class="right-image"> ';
                                echo '<img src="'.esc_url(get_field('icon_check_popup','option')['url']).'" alt="images" />';
                            echo '</div>';
                        } ?>
                        
                    </div>
                    <div class="content-column">
                        <?php if (!empty(get_field('title_popup','option'))) {
                            echo '<h2 class="title-h2">'.get_field('title_popup','option').'</h2>';
                        } ?>
                        <?php if (!empty(get_field('icon_check_popup','option'))) {
                            echo '<img src="'.esc_url(get_field('icon_check_popup','option')['url']).'" alt="images" />';
                        } ?>
                    </div>
                </div>
                <div class="block-image">
                    <div class="list-image">
                        <?php if(!empty(get_field('list_image_popup','option'))) {
                            echo '<ul>';
                                foreach(get_field('list_image_popup','option') as $list_image){
                        
                                   echo '<li><img src="'.esc_url($list_image['url']).'" alt="images"></li>';

                                }
                            echo '</ul>';
                        } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-popup">
                <div class="intro-text">
                    <?php if (!empty(get_field('text_bottom_popup','option'))) {
                        echo '<p>'.get_field('text_bottom_popup','option').'</p>';
                    } ?>                    
                </div>
                <?php if (!empty(get_field('link_button_popup','option'))) {
                    echo '<div class="action-button">';
                        echo '<a href="'.esc_url(get_field('link_button_popup','option')['url']).'">'.esc_html(get_field('link_button_popup','option')['title']).'</a>';
                    echo '</div>';
                } ?>
                
            </div>
        </div>
    </div>
    <div class="overlay-popup"></div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $("html").getNiceScroll().remove();
    }) 
</script>