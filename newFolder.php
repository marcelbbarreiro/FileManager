<!DOCTYPE html>
<?php
	function createDirectory() {
		$add = $_POST["add"];
		mkdir("./uploads/".$add);
		
	}
?>
<button type="button" class="btn btn-info btn-lg btn-block btn-folder" data-bs-toggle="modal" data-bs-target="#CreateFolder"><i class="fa-solid fa-folder-plus"></i> Create Folder</button>
<button type="button" class="btn btn-secondary btn-lg btn-block btn-folder" data-bs-toggle="modal" data-bs-target="#RenameFolder"><i class="fa-solid fa-pen-to-square"></i> Rename Folder</button>

<!-- Create Folder Modal -->
<div class="modal fade" id="CreateFolder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Folder</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
	  		<form class="formFolder" action = "" method = "post">
					<input type = "text" style = "width: 120px;"
					class = "form-control" name = "add" id = "add" />
					<input type = "submit" name = "submit"
						value = "Create" />
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>


<!-- Rename Modal -->
<div class="modal fade" id="RenameFolder" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rename Folder</h5>
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
			createDirectory();
	?>

