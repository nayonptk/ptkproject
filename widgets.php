<?php 
	function jamal_sidebar_register(){ 




			register_sidebar(array( 

			'name'	=> __('popular Post','jamal'),
			'id'	=> 'jamal_popular_post',
			
		));

	}

	add_action('widgets_init','jamal_sidebar_register')

?>