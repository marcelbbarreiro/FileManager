<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['file'];
    
    $fileName = $_FILES['file']["name"];
    // $fileName = $file['name']; Alternative
    $fileTmpName = $_FILES['file']["tmp_name"];
    $fileSize = $_FILES['file']["size"];
    $fileError = $_FILES['file']["error"];
    $fileType = $_FILES['file']["type"];



    $fileExt = explode('.', $fileName); // separa el nombre y la extension del archivo por el punto (.)
    $fileActualExt = strtolower(end($fileExt)); // lowercase la extension ej: .jpg, .gif,

    $allowed = array('jpg', 'gif', 'jpeg', 'png', 'pdf');
    // define las extensiones permitidas.

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) { // si no encuentra errores
            if ($fileSize < 1000000){ // define el tamaño del archivo
                $fileNameNew = uniqid ('',true).".".$fileActualExt; // Añade un Id al archivo
                $fileDestination = 'uploads/'.$fileNameNew; // Define la carpeta donde se guarda el archivo
                move_uploaded_file($fileTmpName, $fileDestination); // Mueve el archivo desde la carpeta temporal al root
                header('Location: documents_list.php');

            } else {
                echo "Your file is too large";
            }
        } else {
            echo "There was an error uploading the file";
        }

    } else {
        echo "You cannot upload the file of this type";
    }

}