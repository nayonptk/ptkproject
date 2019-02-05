<?php get_header(); ?>



            <div class="category-post-type width"> 


                <?php while(have_posts()) : the_post(); ?>



                    <div class="category-post">
                        <div class="category-post-img">       
                                <?php  the_post_thumbnail('post_mediam_width' ); ?>       
                        </div>

                      <div class="category_title_content"> 

                        <div class="category-post-title"> 
                            <a href="<?php the_permalink(); ?>"> <p> <?php the_title(); ?> </p> </a>
                        </div>

                        <div class="category-post-content"> 
                                <?php echo wp_trim_words(get_the_content(), 15, ' <a href="'.get_the_permalink().'">Red more</a> '); ?>

                         </div>
                   </div>

                    </div>

                    <?php endwhile; ?>



                </div>


      
   
  


<?php get_footer(); ?>




