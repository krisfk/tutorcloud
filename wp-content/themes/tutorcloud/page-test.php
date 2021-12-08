<?php


if($_FILES)
{
	 echo 'have file';
	// print_r($_FILES);
}
?>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="upload_file" id="upload_file">
    <input type="submit">
</form>

<?php 

if($_POST)
{
    echo 'post';
}
?>