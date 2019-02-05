<?php get_header(); ?>



<div class="clearfix"></div>
<!-- end page title -->

<section class="sec-padding width">
  <div class="container jahe">
    <div class="row">
     
      <div class="col-md-8">


        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
         
          <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom">

            <h4 class="font-weight-5 less-mar-4"><a href="<?php the_permalink(); ?>" class="dark-primary"><?php the_title(); ?></a></h4>


            <?php the_post_thumbnail('blog_image',array(
              'class' => 'img-responsive margin-bottom-2'
            ));?>
            

            <span class="small"></span> &nbsp;
            <p class="margin-top-2 margin-bottom-1"><?php the_content(); ?></p>

            <?php comments_template('',true); ?>
          </div><!--end col-->

          <div class="clearfix margin-bottom-5"></div>   

        <?php endwhile;endif;   ?>




        
      </div>
      <!-- end left col -->
      


      







      <div class="clearfix"></div>


    </div>
  </div>
</section>



<?php get_footer(); ?>


