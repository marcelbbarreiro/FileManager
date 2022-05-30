<?php

include("index.php");

if ($_POST) {
    $oldName=$_POST['oldName'];
    "<script type='text/javascript'>alert('$oldName');</script>"; 
    $newName=$_POST['newName'];
    
    //Rename the directory to the new name, allowing to edit it multiple times
    rename("./uploads/".$oldName, "./uploads/".$newName);

    header("Location: ./");
}