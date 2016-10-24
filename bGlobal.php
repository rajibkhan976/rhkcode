<?php
/**
 * @package B Global plugin
 * @version 1.0
 */
 /*
 Plugin Name: B Global plugin
 Plugin URI: http://bglobalsourcing.com/plugin/bglobal_plugin/
 Description: Content formatting
 Author: B Global Sourcing
 Version: 1.0
 Author URI: http://bglobalsourcing.com/author/
 */
 
 function scl_content_options(){
	 
	 $content_format = array(
	 'content_color' => '',
	 'background_color' => '',
	 'box_shadow' => '',
	 'border_radius' => ''
	 );
	 
	 add_option( 'scl_content_options', $content_format, '', 'yes');
	 }

register_activation_hook(__FILE__, 'scl_content_options');

function scl_content_options_page(){
	
?>

<div class="wrap">
	<form method="post" id="scl_content_options" action="options.php">
		<?php
		settings_fields('scl_content_options');
		$options = get_option( 'scl_content_options' );
	?>
	<h2><?php _e('Content formatting'); ?></h2>
	<table class="form-table">
		<tr>
		<th scope="row"><?php _e('Text color:'); ?></th>
		<td colspan="3">
		<input type="color" name="scl_content_options[content_color]" value="<?php echo esc_attr($options['content_color']); ?>">
		</td>
		</tr>
		<tr>
		<th scope="row"><?php _e('Background color:'); ?></th>
		<td colspan="3">
		<input type="color" name="scl_content_options[background_color]" value="<?php echo esc_attr($options['background_color']); ?>">
		</td>
		</tr>
		<tr>
		<th scope="row"><?php _e('Border radius:'); ?></th>
		<td colspan="3">
		<input type="number" name="scl_content_options[border_radius]" value="<?php echo esc_attr($options['border_radius']); ?>">
		<span><?php _e('px'); ?></span>
		</td>
		</tr>
		<tr>
		<th scope="row"><?php _e('Box shadow:'); ?></th>
		<td colspan="3">
		<input type="number" name="scl_content_options[box_hshadow]" value="<?php echo esc_attr($options['box_hshadow']); ?>">
		<span><?php _e('px'); ?></span>
		<input type="number" name="scl_content_options[box_vshadow]" value="<?php echo esc_attr($options['box_vshadow']); ?>">
		<span><?php _e('px'); ?></span>
		<input type="number" name="scl_content_options[box_blur]" value="<?php echo esc_attr($options['box_blur']); ?>">
		<span><?php _e('px'); ?></span>
		<input type="color" name="scl_content_options[box_color]" value="<?php echo esc_attr($options['box_color']); ?>">
		</td>
		</tr>
	</table>
	<p class="submit">
		<input type="submit" value="<?php echo esc_attr_e('Save');?>" class="button-primary">
	</p>
	</form>
</div>
<?php
}
add_action('admin_menu', 'scl_content_options_add_pages');

function scl_content_options_add_pages(){
	add_options_page('Content formatting','Content formatting','manage_options','content-options-example','scl_content_options_page');
	register_setting('scl_content_options','scl_content_options');
	}
	
	register_deactivation_hook(__FILE__,'scl_delete_content_options');
	
	register_uninstall_hook(__FILE__,'scl_delete_content_options');
	
	function scl_delete_content_options(){
		delete_option('scl_content_options');
		}
		
		add_action('the_content','post_format');
		
		function post_format($content){
			if(is_front_page() || is_page('Contact us') || is_page('Gallery') || is_page('Post Categories')){return $content;}
			else{
			$style = get_option('scl_content_options');
			$content = "<div style='color:".$style['content_color'].";background-color:".$style['background_color'].";border-radius:".$style['border_radius']."px;box-shadow:".$style['box_hshadow']."px ".$style['box_vshadow']."px ".$style['box_blur']."px ".$style['box_color']."'>".$content."</div>";
			return $content;}
			}
?>
