<?php

include("index.php");

if ($_POST) {
    $oldName=$_POST['oldName'];
    $newName=$_POST['newName'];
    
    //Rename the directory to the new name, allowing to edit it multiple times
    rename("./uploads/".$oldName, "./uploads/".$newName);

    header('Location:'. $_SERVER['HTTP_REFERER']);
}