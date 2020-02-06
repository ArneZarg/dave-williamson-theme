<?php get_header();

?>

 <center class="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col"><h1 class="page-title">SHOWS</h1> </div>
            </div>
            <div class="row">
                <div class="col"><h3 class="section-title">Upcoming Events</h3></div><br>
            </div>
            <!-- DEBUG 11 -->
            <?php
                //find date time now
                $today = date('Y-m-d');
                //query
                $posts = (array(
                    'posts_per_page' => 5,
                    'post_type' => 'event',
                    'order' => 'ASC',
                    'orderby' => 'meta_value_num',
                    'meta_key' => 'event_date',
                    'meta_query' => array(
                        array(
                            'key' => 'event_date',
                            'compare' => '>=',
                            'value' => $today,
                            'type' => 'DATE'
                        )
                    )  
                ));
                ?>
                
                <?php
                $children = new WP_Query($posts);
                if($children->have_posts()):
                    while($children->have_posts()): 
                        echo $children->the_post();
                ?>
            <div class="row container">
                
                <div class="col-lg-4">
                    <span class="date">

                        <?php
                        $date = get_field('event_date');
                            $p = new DateTime(get_field('event_date', false, false));
                            echo $p->format('m');
                        ?>/
                        <?php
                            $p = new DateTime(get_field('event_date', false, false));
                            echo $p->format('d');
                        ?>/
                        <?php
                            $p = new DateTime(get_field('event_date', false, false));
                            echo $p->format('Y');
                        ?>
                    </span>
                </div>
                <div class="col-lg-4">
                    <span class="event-title"><?php the_title();?></span>
                    <span class="event-desc"><?php the_content();?></span>
                </div>
                <div class="col-lg-4">
                    <div class="time"><?php the_field('event_time')?></div>
                    <span class="street"><?php the_field('venue_address')?></span><br>
                    <span class="city"><?php the_field('venue_city')?></span>
                </div>
            </div>
            <hr>
        <?php endwhile;
            wp_reset_postdata();
            else:
            ?>
            <p>No Upcoming Events. <a href="<?php echo esc_url(site_url('/contact')) ?>">Book me!</a></p>
            <?php
            endif;
        ?>
        </div>
        </center>
        <center class="section-2">
        <div class="container-fluid">
            <div class="row container">
                <div class="col"><h3 class="section-title">Past Events</h3></div><br>
            </div>
            <?php
                //find date time now
                $today = date('Y-m-d');
                //query
                $posts = (array(
                    'posts_per_page' => 5,
                    'post_type' => 'event',
                    'order' => 'DESC',
                    'orderby' => 'meta_value_num',
                    'meta_key' => 'event_date',
                    'meta_query' => array(
                        array(
                            'key' => 'event_date',
                            'compare' => '<',
                            'value' => $today,
                            'type' => 'DATE'
                        )
                    )  
                ));
                ?>
                
                <?php
                $children = new WP_Query($posts);
                if($children->have_posts()):
                    while($children->have_posts()): 
                        echo $children->the_post();
                ?>
            <div class="row container">
                
                <div class="col-lg-4">
                    <span class="date">

                        <?php
                        $date = get_field('event_date');
                            $p = new DateTime(get_field('event_date', false, false));
                            echo $p->format('m');
                        ?>/
                        <?php
                            $p = new DateTime(get_field('event_date', false, false));
                            echo $p->format('d');
                        ?>/
                        <?php
                            $p = new DateTime(get_field('event_date', false, false));
                            echo $p->format('Y');
                        ?>
                    </span>
                </div>
                <div class="col-lg-4">
                    <span class="event-title"><?php the_title();?></span>
                    <span class="event-desc"><?php the_content();?></span>
                </div>
                <div class="col-lg-4">
                    <div class="time"><?php the_field('event_time')?></div>
                    <span class="street"><?php the_field('venue_address')?></span><br>
                    <span class="city"><?php the_field('venue_city')?></span>
                </div>
            </div>
            <hr>
        <?php endwhile;
            wp_reset_postdata();
            else: echo 'no events found';
            endif;
        ?>
        </div>
        </center>
        <center class="section-1">
            <div class="row container">
                <div class="col-lg-6">
                <?php        
                    while(have_posts()){
                        the_post()
                    ?>
                    <h4><?php the_field('call_to_action') ?></h4>
                    <?php  } ?>  
                </div>
                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="89" title="Shows Contact Form"]') ?>
                </div>
            </div>
        </center>
<?php get_footer(); ?>