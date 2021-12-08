<?php

if($_POST)
{
	 echo 3;
	print_r($_FILES);
}
?>

<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="upload_file" id="upload_file">
    <input type="submit">
</form>