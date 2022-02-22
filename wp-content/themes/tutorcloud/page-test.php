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


$meta_data = get_field_objects(443);

$sorted_meta_data = array_sort($meta_data, 'menu_order', SORT_ASC);


print_r($sorted_meta_data);
// print_r($meta_data);


        // $tutor_id = 'T'.
        // $post_id= 999;
        // $tutor_id = str_pad($post_id, 5, '0', STR_PAD_LEFT);
        // echo 'T'.substr(date('Y'),2,2).$tutor_id;
    // echo $tutor_id;

?>
<?php


// if($_FILES["upload_file"]['size'])
// {
// 	//  echo 'have file';
// 	print_r($_FILES);
// }
?>

<!-- <form action="" method="post" enctype="multipart/form-data">

    <input type="text" name="test">
    <input type="file" name="upload_file" id="upload_file">
    <input type="submit">
</form> -->