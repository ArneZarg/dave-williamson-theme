<?php get_header();
	while(have_posts()){
		the_post()
 ?>
<center class="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col"><h1 class="page-title"><?php the_title(); ?></h1> </div>
            </div>
            <div class="row container">
                <div class="col-lg-6">
                    <img src="<?php the_field('about_me_image') ?>">
                </div>
                <div class="col-lg-6">
                    <h3 class="section-title left">About Me</h3>
                    <br>
                    <!--<div class="description">-->
                    <span class="description">
                    	<?php the_content(); ?>
                    </span>
                    <!--</div>-->
                </div>
            </div>
        </div>
        </center>
        <center class="section-2">
        <div class="container-fluid">
            <div class="row container">
                <div class="col-lg-6 col-md-12">
                    <h3 class="section-title left">Student Testimonial</h3>
                    <br>
                    <span id="test">
                    	<?php the_field('testimonial') ?>
                	</span>
                </div>
                <div class="col-lg-6">

                    <img src="<?php the_field('second_photo') ?>">
                </div>
            </div>
        </div>
        </center>
        <center class="section-1">
            <div class="row container">
                <div class="col-lg-6 col-md-12">
                    <h4><?php the_field('call_to_action') ?></h4>    
                </div>
                <div class="col-lg-6 col-md-12">
                	<?php echo do_shortcode('[contact-form-7 id="47" title="Bio Form"]') ?>
                </div>
            </div>
        </center>
<?php }get_footer(); ?>