<?php
unlink($_GET['name']);
//Redirecting back
header("Location:". $_SERVER["HTTP_REFERER"]);