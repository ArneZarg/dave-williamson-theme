<?php get_header();
while(have_posts()){
        the_post()

?>
<!-- DEBUG 2 -->
<center class="section-1" style="height:90vh">
			<div class="row container">
                <div class="col"><h1 class="page-title">CONTACT</h1> </div>
            </div>
            <div class="row container">
                <div class="col-lg-6">
                    <h4 class="contact-excerpt"><?php the_content(); ?></h4>    
                </div>
                <div class="col-lg-6">
                	<br><br>
                    <?php echo do_shortcode('[contact-form-7 id="71" title="Contact page form"]') ?>
                </div>
            </div>
</center>
<?php } get_footer() ?>