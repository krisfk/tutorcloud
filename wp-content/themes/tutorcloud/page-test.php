<?php 

// if($_POST)
// {
//     echo 'post';
// }

        // $tutor_id = 'T'.
        $post_id= 999;
        $tutor_id = str_pad($post_id, 9, '0', STR_PAD_LEFT);
        
        echo substr(date('Y'),2,2);
    echo $tutor_id;

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