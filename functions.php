<?php 
function jamal_theme_hook() { 

	add_theme_support("title-tag");
	add_theme_support( 'post-thumbnails' ); 

	load_textdomain( 'jamal', get_theme_file_uri('lan' ) );


	register_nav_menus(array( 

		'menus_one'	=> __('menus_one','jamal'),	

	));



	register_nav_menus(array( 

		'menus_two'	=> __('menus_two','jamal'),	

	));

	register_nav_menus(array( 

		'menus_three'	=> __('menus_three','jamal'),

	));
	register_nav_menus(array( 

		'menus_foure'	=> __('menus_foure','jamal'),	

	));

	register_nav_menus(array( 

		'leftcatmenu1'	=> __('leftcatmenu1','jamal'),	

	));

	register_nav_menus(array( 

		'leftcatmenu2'	=> __('leftcatmenu2','jamal'),	

	));


		//RIGHT NAV MENUS

	register_nav_menus(array( 

		'rightcatmenu1'	=> __('rightcatmenu1','jamal'),	

	));
	register_nav_menus(array( 

		'rightcatmenu2'	=> __('rightcatmenu2','jamal'),	

	));




	add_image_size('post_mediam_width',400, 225,true);






	register_post_type('home_post',array(


		$thehome =  array(

			'name'	=> 'home post',
			'singular_name'	=> 'home post',
			'add_new'	=> 'add home post',
			'add_new_item'	=> 'add new home post',
			'view_item'	=> 'view home post',
			

		),

		'public' => true,

		'labels'	=>	$thehome,
		'supports'           => array( 'title','editor', 'custom-fields','thumbnail', 'comments')

	));	
		register_taxonomy('home_post','home_post',array( 

		'label'		=> 'texonomy',
		'hierarchical'	=> true


	));



	register_post_type('sidebar_catagory',array(


		$theside =  array(

			'name'	=> 'sidebar post',
			'singular_name'	=> 'sidebar post',
			'add_new'	=> 'add sidebar post',
			'add_new_item'	=> 'add newsidebar post',
			'view_item'	=> 'view sidebar post',

		),

		'public' => true,

		'labels'	=>	$theside,
		'supports'           => array( 'title','editor', 'custom-fields','thumbnail', 'comments')

	));	


	register_taxonomy('sidebar_catagory','sidebar_catagory',array( 

		'label'		=> 'texonomy',
		'hierarchical'	=> true


	));





	register_post_type('leftcategory',array(


		$leftcategory =  array(

			'name'	=> 'leftcategory post',
			'singular_name'	=> 'leftcategory post',
			'add_new'	=> 'add leftcategory post',
			'add_new_item'	=> 'add new leftcategory post',
			'view_item'	=> 'view leftcategory post',

		),

		'public' => true,

		'labels'	=>	$leftcategory,
		'supports'           => array( 'title','editor', 'custom-fields','thumbnail', 'comments')

	));	

	register_taxonomy('categorytexo','leftcategory',array( 

		'label'		=> 'texonomy',
		'hierarchical'	=> true


	));


}
add_action('after_setup_theme','jamal_theme_hook');



function cat_menu($a,$b){  

	$atts = shortcode_atts(array(

		'title'	=> 'pakstin',
		'id'	=> 1,


	),$a);

	extract($atts);


	$tomar = get_terms('sidebar_catagory');


	?>


	<li data-toggle="collapse" class="cursor" data-target="#<?php echo $id; ?>"><?php echo $title; ?>
		<ul class="bd-devesion">
			<li id="<?php echo $id; ?>" class="collapse">

				<?php 
					foreach ($tomar as $for) :  
				?>

				
					<h4><a href="<?php echo get_term_link($for->slug, 'sidebar_catagory'); ?>"><?php echo $for->name; ?></a></h4> 

				<?php endforeach; ?>


			</li>

		</ul>

	</li>  




	<?php
}

add_shortcode('theshort','cat_menu');





















function jamalstyle(){ 

	wp_enqueue_style('fontawesome-style','https://use.fontawesome.com/releases/v5.3.1/css/all.css',1.0,true);
	wp_enqueue_style('slicknav-style', get_template_directory_uri().'/css/slicknav.min.css',1.0,true);
	wp_enqueue_style('main-style', get_stylesheet_uri(),1.0,true);
	wp_enqueue_style('responsive-style', get_template_directory_uri().'/responsive.css',1.0,true);
	wp_enqueue_style('custom-style', get_template_directory_uri().'/css/custom.css',1.0,true);
	wp_enqueue_style('comment-style', get_template_directory_uri().'/css/comment_template.css',1.0,true);
	wp_enqueue_style('the-style', get_template_directory_uri().'/css/the.css',1.0,true);

	wp_enqueue_script('fontawesome-js', get_template_directory_uri().'/js/fontawesome.min.js', array('jquery'), 1.0,true);
	wp_enqueue_script('slicknav-js', get_template_directory_uri().'/js/jquery.slicknav.min.js', array('jquery'),1.0,true);
	wp_enqueue_script('thejs', get_template_directory_uri().'/js/the.js',array('jquery'),1.0,true);

	wp_enqueue_script('active-jquery-js', get_template_directory_uri().'/js/jquery.js',array('jquery'),1.0,true);



}























add_action('wp_enqueue_scripts','jamalstyle');  

include_once('inc/widgets.php');
include_once('redux/ReduxCore/framework.php');
include_once('redux/sample/theme_potion.php');


