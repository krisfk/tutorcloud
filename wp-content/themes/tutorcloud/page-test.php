<form action="" method="post" enctype="multipart/form-data">

    <input type="text" name="test">
    <input type="file" name="upload_file" id="upload_file">
    <input type="submit">
</form>

<?php 

if($_POST)
{
    echo 'post';
}

?>
<?php


if($_FILES["upload_file"]['size'])
{
	//  echo 'have file';
	print_r($_FILES);
}
?>