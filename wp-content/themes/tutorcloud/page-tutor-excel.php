<?php

// Get arguments for all posts
$args = array( 
	'post_type' => 'tutor',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

// Create the array for all posts
$all_posts = array();
$table_th_arr= array();
// Set up the query
$the_query = new WP_Query( $args );

// Setup the loop
if ( $the_query->have_posts() ):

	while ( $the_query->have_posts() ): $the_query->the_post();

		// Get all fields
		$fields = get_fields();
        // print_r($fields);

        
            foreach( $fields as $name => $value ){
                $field = get_field_object($name); 
                // $field['label']; 
                array_push($table_th_arr,$field['label']);
            }


// Push each $fields array into the $all_posts array
array_push($all_posts, $fields);

endwhile;

// Restore original Post Data
wp_reset_postdata();

// Print the result here and do what you choose
// print_r($all_posts);

endif;
?>

<table class="excel-table">
    <tr>



        <?php

        foreach($table_th_arr as $th)
        {
            echo '<th>'.$th.'</th>';
        }
// foreach($all_posts[0] as $key => $item){
//   }
  
?>
    </tr>
    <?php
    for($i=0;$i<count($all_posts);$i++)
    {
        echo '<tr>';
        foreach($all_posts[$i] as $key => $value){
                
            // echo gettype($value);
            if(is_array($value))
            {
                //echo 111;
                  //  print_r($value);
                  echo '<td>'.implode(',', $value).'</td>';

            }
            else
            {
                echo '<td>'.$value.'</td>';
                    // echo print_r($value);
            }
        }
        echo'</tr>';
    }

?>
</table>

<style type="text/css">
table {
    width: max-content;
    border-spacing: 0;
    border-collapse: collapse;

}

table.excel-table th {
    padding: 1rem;
    border: 1px solid #000;
}

table.excel-table td {
    padding: 1rem;

    border: 1px solid #000;
}
</style>