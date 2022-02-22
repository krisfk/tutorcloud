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
		$fields = get_fields();
        
        if(!$save_th)
        {
        
            $meta_data = get_field_objects(get_the_ID());

            $sorted_meta_data = array_sort($meta_data, 'menu_order', SORT_ASC);  
        }
array_push($all_posts, $fields);


endwhile;
wp_reset_postdata();

endif;
?>

<?php
$table='<table class="excel-table mt-5" id="excel-table">
        <tr>';
        foreach($sorted_meta_data as $meta_data)
        {
            $table.='<td class="fw-bold text-light bg-dark">'.$meta_data['label'].'</td>';
            array_push( $table_th_arr,$meta_data['label']);
            array_push( $field_key_arr,$meta_data['name']);
        }
    $table .='</tr>';  
    
    for($i=0;$i<count($all_posts);$i++)
    {
        $table .='<tr>';
        
        for($j=0;$j<count($field_key_arr);$j++)
        {
            // echo 1;
            if(is_array($all_posts[$i][$field_key_arr[$j]]))
            {
                $table .='<td>'.implode(',', $all_posts[$i][$field_key_arr[$j]]).'</td>';   

            }
            else if($field_key_arr[$j]=='proof1' ||$field_key_arr[$j]=='proof2')
            {
                $file_src = wp_get_attachment_url($all_posts[$i][$field_key_arr[$j]]);

                $table .='<td><a href="'.$file_src.'" target="_blank">'.$file_src.'</a></td>';   

            }
            else
            {
                $table .='<td>'.$all_posts[$i][$field_key_arr[$j]].'</td>';   
            }
        }
      
        
        $table .='</tr>';
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