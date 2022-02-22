<?php 

// if($_POST)
// {
//     echo 'post';
// }

// $fields = get_posts(array(
//     'posts_per_page'   => -1,
//     'post_type'        => 'tutor',
//     'orderby'          => 'menu_order',
//     'order'            => 'ASC',
//   ));
//   print_r($fields);
// print_r(get_fields(443));




// $meta_data = get_field_objects(443);

// $sorted_meta_data = array_sort($meta_data, 'menu_order', SORT_ASC);



?>







<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
// $arr1 = array('1','2','3','4','5');
// $arr2 = array('2','3','1','8');
// print_r(array_unique(array_merge($arr1,$arr2)));
$is_admin = current_user_can('manage_options');  // all user they have mange option will get 

if (!$is_admin) {
    wp_redirect(get_site_url());
        exit;
}

?>
<style type="text/css">
#main {
    display: none;
}
</style>
<h1 class="text-start mt-5">tutorcloud tutor list export</h1>
<div class="small">(this page can be only viewed by admin)</div>

<div class="text-start mt-5">
    <a href="javascript:void(0);" class="btn btn-info getfile">EXPORT</a>
</div>

<?php


function array_sort($array, $on, $order=SORT_ASC){
    $new_array = array();
    $sortable_array = array();

    if (count($array) > 0) {
        foreach ($array as $k => $v) {
            if (is_array($v)) {
                foreach ($v as $k2 => $v2) {
                    if ($k2 == $on) {
                        $sortable_array[$k] = $v2;
                    }
                }
            } else {
                $sortable_array[$k] = $v;
            }
        }

        switch ($order) {
            case SORT_ASC:
                asort($sortable_array);
            break;
            case SORT_DESC:
                arsort($sortable_array);
            break;
        }

        foreach ($sortable_array as $k => $v) {
            $new_array[$k] = $array[$k];
        }
    }

    return $new_array;
}


                    
// Get arguments for all posts
$args = array( 
	'post_type' => 'tutor',
    'post_status' => 'publish',
    'posts_per_page' => -1,
);

$all_posts = array();
$table_th_arr= array();
$field_key_arr=array();
$the_query = new WP_Query( $args );
$save_th=false;
if ( $the_query->have_posts() ):

	while ( $the_query->have_posts() ): $the_query->the_post();
        // echo get_field('tutor_id');
        // echo '<br>';
		$fields = get_fields();
        
        // $fields = array_orderby($fields, 'menu_order', SORT_DESC);


    // print_r($fields);
    // echo '<br><br>';
        if(!$save_th)
        {
        
            $meta_data = get_field_objects(get_the_ID());

            $sorted_meta_data = array_sort($meta_data, 'menu_order', SORT_ASC);

         
        }
array_push($all_posts, $fields);


endwhile;
wp_reset_postdata();

endif;
// print_r($all_posts);
?>

<?php
$table='<table class="excel-table mt-5" id="excel-table">
        <tr>';



        foreach($sorted_meta_data as $meta_data)
        {
            $table.='<td class="fw-bold text-light bg-dark">'.$meta_data['label'].'</td>';
        }
    $table .='</tr>';  
    for($i=0;$i<count($all_posts);$i++)
    {
        $table .='<tr>';
        
        for($j=0;$j<count($sorted_meta_data);$j++)
        {
            print_r($sorted_meta_data[$j]);
            // echo $meta_data[$j]['name'];
            if(is_array($all_posts[$i][$sorted_meta_data[$j]['name']]))
            {
                $table .='<td>'.implode(',', $all_posts[$i][$sorted_meta_data[$j]['name']]).'</td>';   

            }
            else if($sorted_meta_data[$j]['name']=='proof1' ||$sorted_meta_data[$j]['name']=='proof2')
            {
                $file_src = wp_get_attachment_url($all_posts[$i][$sorted_meta_data[$j]['name']]);

                $table .='<td><a href="'.$file_src.'" target="_blank">'.$file_src.'</a></td>';   

            }
            else
            {
                $table .='<td>'.$all_posts[$i][$sorted_meta_data[$j]['name']].'</td>';   
            }
        }
        // $table .='<td>f</td>';

        // foreach($all_posts[$i] as $key => $value){
                
        //     if(is_array($value))
        //     {
        //           $table .='<td>'.implode(',', $value).'</td>';

        //     }
        //     else
        //     {
        //         $table .='<td>'.$value.'</td>';
        //     }
        // }
        $table .='</td>';
    }

    $table .='</table>';
    echo $table;
?>





<style type="text/css">
body {
    padding: 1rem;
}

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

<script type="text/javascript">
$(function() {
    $('.getfile').click(
        function() {
            exportTableToCSV.apply(this, [$('#excel-table'), 'tutor-list.csv']);
        });

})

function exportTableToCSV($table, filename) {

    var $rows = $table.find('tr:has(td)'),

        // Temporary delimiter characters unlikely to be typed by keyboard
        // This is to avoid accidentally splitting the actual contents
        tmpColDelim = String.fromCharCode(11), // vertical tab character
        tmpRowDelim = String.fromCharCode(0), // null character

        // actual delimiter characters for CSV format
        colDelim = '","',
        rowDelim = '"\r\n"',

        // Grab text from table into CSV formatted string
        csv = '"' + $rows.map(function(i, row) {
            var $row = $(row),
                $cols = $row.find('td');

            return $cols.map(function(j, col) {
                var $col = $(col),
                    text = $col.text();

                return text.replace('"', '""'); // escape double quotes

            }).get().join(tmpColDelim);

        }).get().join(tmpRowDelim)
        .split(tmpRowDelim).join(rowDelim)
        .split(tmpColDelim).join(colDelim) + '"',

        // Data URI
        csvData = 'data:application/csv;charset=utf-8,' + encodeURIComponent(csv);

    $(this)
        .attr({
            'download': filename,
            'href': csvData,
            'target': '_blank'
        });
}
</script>
<?php

get_footer();
?>