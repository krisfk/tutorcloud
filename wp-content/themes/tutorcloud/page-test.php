<?php

if($_POST)
{
	 echo 2;
	print_r($_FILES);
}
?>

<form action="" method="post">

    <input type="file" name="upload_file" id="upload_file">
    <input type="submit">
</form>