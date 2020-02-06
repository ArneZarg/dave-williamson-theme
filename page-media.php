<?php get_header(); 
while(have_posts()){
		the_post()
?>
<center class="section-1">
        <div class="container-fluid">
            <div class="row">
                <div class="col"><h1 class="page-title">MEDIA</h1></div>
            </div>
            <div class="row container">
                <h3 class="section-title">Videos</h3>
                <!-- debug-->
                <div class="col container"><?php the_content(); ?></div>
            </div>
        </div>
        </center>
        <center class="section-2">
        <div class="container-fluid">
            <div class="row container">
                <div class="col">
                    <h3 class="section-title">Music</h3>
                    <br>
                    <p><?php the_field('music_section') ?></p>
                </div>
            </div>
        </div>
        </center>
        <center class="section-1">
            <div class="row container">
                <div class="col-lg-6">
                    <h4><?php the_field('call_to_action') ?></h4>    
                </div>
                <div class="col-lg-6">
                    <?php echo do_shortcode('[contact-form-7 id="88" title="Media Form"]') ?>
                </div>
            </div>
        </center>
<?php } get_footer(); ?>