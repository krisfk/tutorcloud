<?php 

// if($_POST)
// {
//     echo 'post';
// }

$fields = get_posts(array(
    'posts_per_page'   => -1,
    'post_type'        => 'tutor',
    'orderby'          => 'menu_order',
    'order'            => 'ASC',
    // 'suppress_filters' => true, // DO NOT allow WPML to modify the query
    // 'post_parent'      => $group['ID'],
    // 'post_status'      => 'any',
    // 'update_post_meta_cache' => false
  ));
  print_r($fields);
// print_r(get_fields(431));
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