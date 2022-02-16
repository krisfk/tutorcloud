<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



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

    <?php
// $table='<table class="excel-table" id="excel-table">
//         <tr>';



    //     foreach($table_th_arr as $th)
    //     {
    //         $table.='<th>'.$th.'</th>';
    //     }
    // $table .='</tr>';  
    // for($i=0;$i<count($all_posts);$i++)
    // {
    //     $table .='<tr>';
    //     foreach($all_posts[$i] as $key => $value){
                
    //         // echo gettype($value);
    //         if(is_array($value))
    //         {
    //               $table .='<td>'.implode(',', $value).'</td>';

    //         }
    //         else
    //         {
    //             $table .='<td>'.$value.'</td>';
    //         }
    //     }
    //     $table .='</tr>';
    // }

    // $table .='</table>';
    // echo $table;
?>




    <?php
    $html = str_get_html($table);



    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename=sample.csv');
    
    $fp = fopen("php://output", "w");
    
    foreach($html->find('tr') as $element)
    {
            $th = array();
            foreach( $element->find('th') as $row)  
            {
                $th [] = $row->plaintext;
            }
    
            $td = array();
            foreach( $element->find('td') as $row)  
            {
                $td [] = $row->plaintext;
            }
            !empty($th) ? fputcsv($fp, $th) : fputcsv($fp, $td);
    }
    
    
    fclose($fp);
    
    ?>
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



</body>

</html>