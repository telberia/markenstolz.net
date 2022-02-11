<?php /*
    * Template Name: Landing page
    */ 
get_header('landingpage');
?>
    <main class="site-main">     
    <?php if(!empty(get_field('video_landing')) || !empty(get_field('banner_image_landing'))) { 
        echo '<section class="video-section">
                    <div class="container">
                        <div class="wrap-section">';
                            if(!empty(get_field('video_landing'))) {
                                echo '<video poster="'.esc_url(get_field('video_thumbnail')['url']).'" loop muted autoplay playsinline webkit-playsinline>
                                        <source src="'.esc_url(get_field('video_landing')['url']).'" type="video/mp4" />
                                    </video>';
                            } else {
                                if(!empty(get_field('banner_image_landing'))) {
                                    echo '<img src="'.esc_url(get_field('banner_image_landing')['url']).'" alt="image" />';
                                }
                            }
        echo'            </div>
                    </div>
                </section>';

    } ?>   
        <section class="banner-section">
            <?php $banner_heading = get_field('banner_heading');
            $content_banner = get_field('content_banner');
            if(!empty($banner_heading) || !empty($content_banner)) { 
            echo '<div class="block-content">
                    <div class="container"> 
                        <div class="inner-block-content">';
                        if(!empty($banner_heading)) {
                        echo '<div class="top-title">
                                <span class="icon-banner" style="background-image: url('.esc_url($banner_heading['left_icon']['url']).');"></span>
                                <h2 class="title-h2">'.$banner_heading['right_text'].'</h2>                    
                            </div>';

                        }
                        if(!empty($content_banner)) {
                        echo '<div class="content" data-aos="fade-down" data-aos-once="true" data-aos-duration="2000" data-aos-delay="100">
                                <h3 class="title-h3">'.$content_banner['top_tilte_banner'].'</h3>
                                <div>'.$content_banner['main_content_banner'].'</div>
                            </div>';

                        }
            echo '       </div>       
                    </div>
                </div>';

            } ?>
            <?php $list_benefit_banner = $content_banner['list_benefit_banner']; 
            if(!empty($list_benefit_banner[0])) {
            echo '<div class="block-bottom">
                    <div class="container">
                        <ul class="inner-block-bottom">';
                        $delay = 100;
                        foreach($list_benefit_banner as $item) {
                            echo '<li data-aos="fade-up" data-aos-once="true" data-aos-duration="2000" data-aos-delay="'.$delay.'">
                                <span class="number">'.$item['number'].'</span>
                                <div class="content">
                                    <h4 class="title-h4">'.$item['title'].'</h4>
                                    <div>'.$item['content'].'</div>
                                </div>
                            </li>  ';    
                            $delay = $delay + 100;                   
                        }
            echo'        </ul>
                    </div>                
                </div>';
            } ?>
        </section>  
        <section class="secton-image">
            <?php if(!empty(get_field('title_section_images'))) {
            echo '<div class="block-title">
                    <div class="container">
                        <h2 class="title-h2" data-aos="fade-right" data-aos-once="true" data-aos-duration="2000" data-aos-delay="100">'.get_field('title_section_images').'</h2>
                    </div>
                </div>';
            } ?>
            <?php if(!empty(get_field('list_image'))) { 
            echo '<div class="block-image">
                    <div class="container">
                        <div class="inner-block-image" data-aos="fade-up" data-aos-once="true" data-aos-duration="2000">                        
                            <div id="list-image">';
                            foreach(get_field('list_image') as $list_image) {
                                echo '<div>
                                        <img src="'.esc_url($list_image['url']).'" alt="image" />
                                    </div>';
                            }
            echo            '</div>
                        </div>
                    </div>
                </div>';
            } ?>
        </section>
        <section class="form-section">
            <div class="container">
                <div class="inner-form-section">
                    <?php $left_column_contact = get_field('left_column_contact');
                    if(!empty(get_field('left_column_contact'))) {
                        echo '<div class="column-image" data-aos="zoom-in-right" data-aos-once="true" data-aos-duration="1500" data-aos-delay="100">';
                            if(!empty($left_column_contact['image_contact'])) {
                                echo '<img src="'.esc_url($left_column_contact['image_contact']['url']).'" alt="image">';
                            }
                            if(!empty($left_column_contact['text_left_contact'])) {
                                echo '<div class="caption">'.$left_column_contact['text_left_contact'].'</div>';
                            }
                       echo '</div>';                  
                    } ?>
                    <?php $right_column_contact = get_field('right_column_contact');
                    echo '<div class="column-form" data-aos="zoom-in-left" data-aos-once="true" data-aos-duration="1500" data-aos-delay="100">
                            <div class="inner-column-form">
                                <div class="top-title">';
                                if(!empty($right_column_contact['title_contact'])) {
                                    echo '<h2 class="title-h2">'.$right_column_contact['title_contact'].'</h2>';
                                }
                                if(!empty($right_column_contact['title_strong_contact'])) {
                                    echo '<h2 class="underline-title title-h2">'.$right_column_contact['title_strong_contact'].'</h2>';
                                }
                                echo '</div>';
                                echo $right_column_contact['contact_form'];
                                echo'<div class="information">';
                                if(!empty($right_column_contact['part_phone_number']['text_phone_contact'])) {
                                    echo '<h2 class="title-h2">'.$right_column_contact['part_phone_number']['text_phone_contact'].'</h2>';                                
                                }
                                if(!empty($right_column_contact['part_phone_number']['phone_number_contact'])) {
                                    echo '<h2 class="title-h2"><a href="tel:'.$right_column_contact['part_phone_number']['phone_number_contact'].'" class="underline-title title-h2">'.$right_column_contact['part_phone_number']['phone_number_contact'].'</a></h2>';                                
                                }
                    echo'        </div>                        
                            </div>
                        </div>';
                     ?>
                </div>
            </div>            
        </section>
        <section class="customers-section">
            <div class="container">
                <?php if(!empty(get_field('title_customer_section'))) {
                    echo '<h2  data-aos="fade-up" data-aos-once="true" data-aos-duration="2000" data-aos-delay="100">'.get_field('title_customer_section').'</h2>';
                } ?> 
                <?php if(!empty(get_field('slider_customer')[0]['image_custmer']) || !empty(get_field('slider_customer')[0]['title_customer']) || !empty(get_field('slider_customer')[0]['name_customer']) || !empty(get_field('slider_customer')[0]['job_name_customer'])) {              
                    echo '<div class="slider-bottom" data-aos="zoom-in-down" data-aos-once="true" data-aos-duration="2000" data-aos-delay="100">';
                    foreach (get_field('slider_customer') as $slider_customer ) {
                        echo '<div class="item">
                                <div class="inner-item">
                                    <img src="'.esc_url($slider_customer['image_custmer']['url']).'" alt="images">
                                    <h3>'.$slider_customer['title_customer'].'</h3>
                                    <h4><strong>'.$slider_customer['name_customer'].'</strong></h4>
                                    <p>'.$slider_customer['job_name_customer'].'</p>
                                </div>
                            </div>   ';                
                    }
                    echo '</div>';
                } ?>    
            </div>            
        </section>
    </main>
<?php get_footer('landingpage') ?>