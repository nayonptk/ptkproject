<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <!-- side title -->

    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/logo.jpg"/>


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




    <?php wp_head(); ?>

</head>

<body>
    <header class="header-area">    
        <div class="header width"> 

            <div class="header-left"> 
                <div class="header-left-icon"> 
                    <a href="<?php echo esc_url(site_url()); ?>"> <i class="fas fa-home"></i> </a>                            
                </div>
                <div class="header-left-hometext"> 
                    <ul>        
                        <?php wp_nav_menu(array( 

                            'theme_location'    => 'menus_one',

                        )); ?>
                    </ul>
                </div>
            </div>



            <div class="header-center"> 
                <div class="header-search"> 
                 <div class="header-center-search-box"> 
                    <?php get_search_form(); ?>
                </div>

            </div>
        </div>






        <div class="header-right"> 
            <div class="header-right-content"> 
                <ul>
                    <?php wp_nav_menu(array( 

                        'theme_location'    => 'menus_two',

                    )); ?>
                </ul>
            </div>              
        </div>


    </div>
</header>
