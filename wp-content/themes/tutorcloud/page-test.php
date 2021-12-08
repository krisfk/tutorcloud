<?php

if($_POST)
{
	echo 1;
	print_r($_FILES);
}
?>

<form enctype="multipart/form-data" action="" method="post">

    <input type="file" name="upload_file" id="upload_file">
    <input type="submit">
</form>