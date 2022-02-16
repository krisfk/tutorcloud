<?php

// Get arguments for all posts
$args = array( 
	'post_type' => 'tutor',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

// Create the array for all posts
$all_posts = array();

// Set up the query
$the_query = new WP_Query( $args );

// Setup the loop
if ( $the_query->have_posts() ):

	while ( $the_query->have_posts() ): $the_query->the_post();

		// Get all fields
		$fields = get_fields();

		// Push each $fields array into the $all_posts array
		array_push($all_posts, $fields);

	endwhile;

	// Restore original Post Data
	wp_reset_postdata();

	// Print the result here and do what you choose
	// print_r($all_posts);

endif;
?>

<table>
    <tr>
        <?php
foreach($all_posts[0] as $key => $item){
    $field = get_field_object($key);
     echo '<th>'.$field['label'].'</th>' ;
  }
  
?>
    </tr>
</table>