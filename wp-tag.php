<?php
function exclude_tag_cloud_widget($args) {

$tags_array = get_tags( $args['get'] = 'all' );
		foreach($tags_array as $tag){
			if($tag->count == 1){
				$tag_id[] = $tag->term_id;			
		}
	}
	print_r($tag_id);
	$args['exclude'] = $tag_id; //exclude tags by ID
    return $args;
}

add_filter( 'widget_tag_cloud_args', 'exclude_tag_cloud_widget' );
?>
