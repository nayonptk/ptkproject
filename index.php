<?php get_header(); ?>


<section class="site-title-area "> 
    <div class="site-title width"> 


        <div class="title"> 
            <h2><?php bloginfo('name'); ?></h2>
            <p> Contrary to popular belief, Lorem Ipsum is not simply random text </p>

        </div>

    </div>
</section>


<section class="menu-area "> 
    <div class="themenu width"> 

        <!-- menu-line one start -->
        <div class="menu-one-line"> 

            <div class="menu-title1"> 
                <h2>বাংলাদেশ</h2>
            </div>
            <div class="menu-start"> 
                <div class="start-menu"> 


                    <?php wp_nav_menu(array( 

                        'theme_location'    => 'menus_three',
                     

                    )); ?>

                </div>
            </div>
        </div>
        <!-- menu-line one end -->

        <!-- menu-line two start -->
        <div class="menu-two-line"> 

            <div class="menu-title2"> 
                <h2>আন্তর্জাতিক</h2>
            </div>
            <div class="menu-start2"> 
                <div class="start-menu2"> 

                    <?php wp_nav_menu(array( 

                        'theme_location'    => 'menus_foure',

                    )); ?>

                </div>
            </div>
        </div>
        <!-- menu-line-two end -->

    </div>

</section>

<!-- marquee start -->

‍<section class="marquee-area"> 
    <div class="marquee width"> 
        <div class="marquee-title"> 
            <h4>ব্রেকিং নিউজ</h4>
        </div>
        <div class="marquee-start"> 

            <marquee onmouseover="this.stop();" onmouseout="this.start();">
			<?php 
				if(have_posts()) : while (have_posts()) : the_post() 
			?>
               <li> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
           <?php endwhile; endif;?>




        </marquee>

    </div>
</div>
</section>
<!-- marquee end -->

<!-- country left-start -->



<section class="web-section-area"> 
    <div class="web-section width"> 




 

               <!-- menu-one start-->
        <div class="web-block-area"> 
            <div class="web-block"> 
				<?php dynamic_sidebar('leftcatmenu1');?>
            </div>
        </div>
                <!-- menu-one end-->




        <!-- country left end -->


        <?php get_template_part('content'); ?>


        <!-- country-right start-->


        <div class="web-block-area"> 
            <div class="web-block"> 
				<?php dynamic_sidebar('menusidebar');?>
            </div>
        </div>
        
        <!-- country-right end-->           
    </div>

</section>  

<footer class="footer-area"> 
    <div class="footer width">


        <div class="footer-left-area"> 
            <div class="footer-left"> 
                <div class="footer-contact">
                    <div class="ft-con"> 

                        <h2 class="ft-cr">Contact us</h2>
                        <!-- address -->
                        <div class="ft-address"> 

                            <div class="ft-add-title"> 
                                <h4>Banglasesh:</h4>
                            </div>
                            <div class="ft-add-subtitle"> 
                                <p>Bar Council Bhaban,3 Shahid capt.jahedul islam nayon kolatola patuakhali</p>
                            </div>
                        </div>      <!--/ address -->

                        <!-- phone -->
                        <div class="ft-phone"> 

                            <div class="ft-add-title"> 
                                <h4>Phone:</h4>
                            </div>
                            <div class="ft-add-subtitle"> 
                                <p>(+88)01754408156, 01771498844,</p>
                            </div>
                        </div>
                        <!--/ phone -->

                        <!-- Email -->
                        <div class="ft-Email"> 
                            <div class="ft-add-icon"> 
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="ft-add-title"> 
                                <h4>Email:</h4>
                            </div>
                            <div class="ft-add-subtitle"> 
                                <p>nayonptk@gmail.com</p>
                            </div>
                        </div>
                        <!--/ Email -->

                        <!-- Hours -->
                        <div class="ft-Hours"> 
                            <div class="ft-add-icon"> 
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="ft-add-title"> 
                                <h4>Working Day/Hours:</h4>
                            </div>
                            <div class="ft-add-subtitle"> 
                                <p>sunday-thursday 9am to 5pm</p>
                            </div>
                        </div>
                        <!--/ Hours --> 


                    </div>


                </div>
            </div>

        </div>  
        <div class="footer-importent-center">
            <div class="ft-imt"> 
                <h2 class="ft-cr">Importent Link</h2>
                <div class="ft-im-title"> 
                    <ul>
                        <li><a href="">office of the honbale president</a></li>
                        <li><a href="">office of the honbale president</a></li>
                        <li><a href="">office of the honbale president</a></li>
                        <li><a href="">office of the honbale president</a></li>
                        <li><a href="">office of the honbale president</a></li>
                        <li><a href="">office of the honbale president</a></li>
                    </ul>
                </div>
            </div>


        </div>


        <div class="footer-right-area"> 
            <div class="footer-right"> 
                <div class="footer-rt-flow"> 

                    <div class="social-icon"> 
                        <div class="social-title"> 
                            <h2 class="ft-cr">Follow US</h2>
                        </div>
                        <a href="https://web.facebook.com/gazi.jamal.77"><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-twitter-square"></i></a>
                        <a href=""><i class="fab fa-youtube-square"></i></a>
                        <a href=""><i class="fab fa-linkedin"></i></a>
                        <a href=""><i class="fab fa-google-plus-square"></i></a>
                    </div>
                </div>
                <div class="footer-right-photo"> 
                    <div class="gallery"> 
                        <div class="gallery-title"> 
                            <h2 class="ft-cr"> Photo Gllery</h2>
                        </div>
                        <div class="photo-img"> 
                            <img src="<?php echo get_template_directory_uri();?>/img/img1.jpg" alt="" />
                            <img src="<?php echo get_template_directory_uri();?>/img/img2.jpg" alt="" />
                            <img src="<?php echo get_template_directory_uri();?>/img/img3.jpg" alt="" />
                            <img src="<?php echo get_template_directory_uri();?>/img/img4.jpg" alt="" />
                        </div>
                    </div>
                </div>

            </div>


        </div>


    </div>
</footer>
<?php get_footer(); wp_footer(); ?>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>
</html>

