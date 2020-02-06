<?php get_header();?>
<?php $banner = new WP_Query(array('post_type'=>'homepage_banner'));
    while($banner-> have_posts()){
        $banner->the_post()
?>
<center id="first-div" style="background-image:url(<?php echo the_field('background_image')?>)">
                
                <div class="intro">
                    <h2 class="name"><?php the_field('title') ?></h2>
                    <h3 class="subtitle"><?php the_field('subtitle') ?></h3>
                    <center>
                    <p class="intro-quote"><?php the_field('quote') ?></p>
                    </center>
                </div>
                
</center>
<?php } wp_reset_postdata(); ?>
<center id="second-div">
            <div class="container-fluid">
            <h2 class="section-intro">Get In Touch</h2>
            <?php 
                $banner = new WP_Query(array('post_type'=>'homepage_banner'));
                while($banner-> have_posts()){
                $banner->the_post()
            ?>
            <p><?php the_field('welcome_message') ?></p>
            <?php } wp_reset_postdata(); ?>
            </div>
            <div class="row container">
            	<div class="col">
                    <br>
            		<?php 
            			echo do_shortcode('[contact-form-7 id="61" title="Homepage Form"]')
            		?>
            	</div>
        	</div>
</center>
<?php get_footer();?>