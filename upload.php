<?php
//Getting uploaded files
$file = $_FILES['file'];

//Uploading in ./uploads folder
move_uploaded_file($file ["tmp_name"],"./uploads/".$file["name"]);

//Redirecting back
header('Location:'. $_SERVER['HTTP_REFERER']);