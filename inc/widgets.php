<?php 
function jamal_sidebar_register() { 

	register_sidebar(array( 

		'name'	=> __('Blog sidebar','jamal'),

		'id'	=> 'our_sideber',

	));

	register_sidebar(array( 

		'name'	=> __('Right Menu','jamal'),

		'id'	=> 'menusidebar',
		'before_widget'	=>' <div class="cuntry-one"> ',
		 'after_widget'  => '</div>',
		'before_title' => '<div class="country-icon-title bk-co"><h2>',	
		'after_title' => '</h2></div>',
	));
		register_sidebar(array( 

		'name'	=> __('Left Menu','jamal'),

		'id'	=> 'leftcatmenu1',
		'before_widget'	=>' <div class="cuntry-one"> ',
		 'after_widget'  => '</div>',
		'before_title' => '<div class="country-icon-title bk-co"><h2>',	
		'after_title' => '</h2></div>',
	));
}

add_action('widgets_init','jamal_sidebar_register');