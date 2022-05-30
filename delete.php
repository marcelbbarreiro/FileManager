<?php
unlink($_GET['name']); // delete file
rmdir($_GET['name']); // delete folder
//Redirecting back
header("Location:". $_SERVER["HTTP_REFERER"]);