<!-- home post start -->

<div class="post-area"> 
    <div class="post">
        <!-- post-left-site start-->
        <div class="post-left-site"> 
            <div class="singal-post-type"> 


                <?php $home_post = new WP_Query(array( 

                    'post_type' => 'home_post',
                    'posts_per_page'    => 5,
                )); ?>


                <?php while(have_posts()) : the_post(); ?>
                    <div class="singal-post">
                        <div class="singal-post-img"> 
                            <a href=""> <?php  the_post_thumbnail('medium' ); ?> </a>        
                        </div>
                        <div class="singal-post-title"> 
                            <a href="<?php the_permalink(); ?>"><?php echo wp_trim_words(get_the_title(),5,NULL); ?></a> 
                        </div>
                        <div class="singal-post-content"> 
                            <?php if(is_home()) : ?>
                                <?php echo wp_trim_words(get_the_content(), 15, ' <a href="'.get_the_permalink().'">Red more</a> '); ?>
                                <?php else : ?>
                                    <?php the_content(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    
                        <div class="pagi"> 
                                 <?php the_posts_pagination(array( 

                                      'prev_text' => __('Prev','pexr'),
                                      'next_text' =>__('Next','pexr'),
                                      'screen_reader_text'  => ' ',

                                    )); 

                                    ?>
                        </div>
            </div>
        </div>
            <!-- post-left-site start-->

            <!-- post_right_site-start -->

            <div class="post-right-site"> 

              <?php dynamic_sidebar('our_sideber'); ?>

          </div>

          <!-- post_right_site-end -->
      </div>
  </div>

<!-- home post end -->