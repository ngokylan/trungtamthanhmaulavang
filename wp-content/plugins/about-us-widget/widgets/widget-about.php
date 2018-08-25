<?php 

Class auw_widget extends WP_Widget{


	//constructor
	function __construct() {
 
    parent::__construct(
         
        // base ID of the widget
        'auw_widget',
         
        // name of the widget
        __('About Us Widget', 'auw_widget' ),
         
        // widget options
        array (
            'description' => __( 'Excerpt of your story. Be confident and let others know it.', 'auw_widget' )
        )
         
    );
     
}

	//form
	function form($instance){

		/* Set up some default widget settings. */
		$blogname = get_bloginfo( 'name' );
		$defaults = array( 
			'title' => 'About '.$blogname,
			'auw_thumbnail' => site_url().'/wp-admin/images/wordpress-logo.svg',
			'auw_about_textarea' => $blogname.' is a beautifully crafted blogging theme for travellers. Built with the finest pixel quality and best coding practices by fernando villamor.',
			'auw_about_url' => '#',
		 );
		$instance = wp_parse_args( (array) $instance, $defaults );


		if ($instance){
			$title = esc_attr($instance['title']);

			//auw_thumbnail
			$auw_thumbnail = esc_attr($instance['auw_thumbnail']);

			//textarea
			$auw_about_textarea = esc_attr($instance['auw_about_textarea']);

			//textarea
			$auw_about_url = esc_attr($instance['auw_about_url']);
		}

		else
		{
			$title = '';
			$auw_thumbnail = '';
			$auw_about_textarea = '';
			$auw_about_url = '';

		}

	?>

	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>" class="title">
			<?php _e('Title:', 'auw_widget'); ?>
		</label>
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
		name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title;  ?>" />
	</p>

	<!-- Thumbnail textbox -->
	<p>
		<label for="<?php echo $this->get_field_id('auw_thumbnail'); ?>" class="auw_thumbnail">
			<?php _e('Thumbnail link:', 'auw_widget'); ?>
		</label>
		<div class="auw-auw_thumbnail"><img src="<?php echo $auw_thumbnail;  ?>" alt="" /></div>
		
		<input type="text" class="widefat" id="<?php echo $this->get_field_id('auw_thumbnail'); ?>" 
		name="<?php echo $this->get_field_name('auw_thumbnail'); ?>" value="<?php echo $auw_thumbnail;  ?>" />
	</p>

	<!-- About textbox -->
	<p class="auw">
		<label for="<?php echo $this->get_field_id('auw_about_textarea'); ?>" class="asterisk auwsocial">
			About excerpt <i>(max 20 words)</i>
		</label>

		<textarea cols="30" rows="7" class="widefat input_auw_about_textarea" id="<?php echo $this->get_field_id('auw_about_textarea'); ?>"  
		name="<?php echo $this->get_field_name('auw_about_textarea'); ?>"
		><?php echo $auw_about_textarea; ?></textarea>

	</p>

	<!-- About learn mroe link -->
	<p class="auw">
		<label for="<?php echo $this->get_field_id('auw_about_url'); ?>" class="asterisk auwsocial">
			Learn more url
		</label>

		<input type="text" cols="30" rows="7" class="widefat input_auw_about_url" id="<?php echo $this->get_field_id('auw_about_url'); ?>"  
		name="<?php echo $this->get_field_name('auw_about_url'); ?>"
		value="<?php echo $auw_about_url; ?>";
		>

	</p>

	
    <p class="auwdonate">Need more customization here. Contact <a href="http://fernandovillamorjr.com/" target="_blank">Fernando Villamor Jr</a></p><hr>
	<?php }

	// widgt update
	function update($new_instance, $old_instance){
			$instance = $old_instance;
			//fields
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['auw_thumbnail'] = strip_tags($new_instance['auw_thumbnail']);
			$instance['auw_about_textarea'] = strip_tags($new_instance['auw_about_textarea']);
			$instance['auw_about_url'] = strip_tags($new_instance['auw_about_url']);
			return $instance;

	}



	//display
	function widget($args, $instance){

		extract($args);

		$title = apply_filters('widget_title', $instance['title']);

		$auw_thumbnail =  $instance['auw_thumbnail'];
		
		$auw_about_textarea =  $instance['auw_about_textarea'];

		$auw_about_url =  $instance['auw_about_url'];

		//Add custom class
		
		$before_widget = str_replace('class="', 'class="'. 'auw_widget' . ' ', $before_widget);

		echo $before_widget;

		//display widget
		echo '<div class="widget-text">';

		if ($title) {
			echo $before_title . $title . $after_title;
		}

		if ($auw_thumbnail) {
			echo '<span class="auw_auw_thumbnail"><img src="'.$auw_thumbnail.'" alt="" /></span>';
		}

		if ($auw_about_textarea) {
				echo '<p>'.$auw_about_textarea.'</p>';

		}


		if ($auw_about_url) { ?>
			<a href="<?php echo $auw_about_url; ?>" class="footer-about-lmore">
				<?php _e('Learn more') ?>
			</a>
		<?php }

	
		echo "</div>";


		echo $after_widget;
	}

}
?>