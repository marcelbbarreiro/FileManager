<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/main.css">
</head>
<header class="header">
  <div class="Menu">
    <h1>Welcome</h1>
  </div>
</header>

<body> 
    <div class="container"> 
        <div class="folder">
            <?php require_once("newFolder.php");?>
        </div>
        <div class="Upload">
            <form method="post" action="upload.php" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Upload" name="Upload">
            </form>
        </div>
    </div>

<div class="FilesUpload">
<?php
$files = scandir("uploads"); 
//display files folder
for ($a = 2; $a < count($files); $a++) 
{
?>

    <p class="files">
    <img src="student/second.jpg"height="100"width="100"/>
    <?php echo $files[$a];?>
        <a href="uploads/<?php echo $files[$a];?>"download = "<?php echo $files[$a];?>">
        DOWNLOAD
        </a>
        <a href="delete.php?name=uploads/<?php echo $files[$a];?> "style="color:red;">
        DELETE
        </a>
        <a href="rename.php?rename/<?php echo $files[$a];?>" style="color:green;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        RENAME
        </a>
        <a href="view.php?name=uploads/<?php echo $files[$a];?> "style="color:orange;">
        VIEW
        </a>
        </p>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rename File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="./rename.php" >
            <input type="text" name="oldName" value="<?php echo $files[$a]; ?>">

            <input type="text" name="newName" placeholder="New Name">
            <input type="submit" value="submit" class="btn btn-primary">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
        
<?php
}
?>
</div>


    
