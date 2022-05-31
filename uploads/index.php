<?php

session_start();

require_once("./config.php");
require_once("./layouts/header.php");
require_once("./layouts/search.php");
require_once("./layouts/aside.php");
require_once("./layouts/table.php");
require_once("./layouts/modalAddFile.php");
require_once("./layouts/modalAddFolder.php");
require_once("./layouts/modalDelete.php");
require_once("./layouts/modalRename.php");
require_once("./layouts/modalUploadFiles.php");
require_once("./layouts/modalView.php");
require_once("./layouts/breadcrumbs.php");
require_once("./layouts/modalEditFile.php");
require_once("./modules/validation.php");
require_once("./modules/session.php");
require_once("./utils/url.php");

if (!validateUrlFolderPath()) {
	header("Location: ./index.php?path=/");
	exit();
}

setSessionValue("path", getUrlFolderPath());

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>FileSystem Explorer</title>
	<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script crossorigin="anonymous" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script crossorigin="anonymous" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
	<script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"></script>
	<script src="./assets/js/init.js" type="module"></script>
	<link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="./assets/styles/css/main.css" rel="stylesheet" />
</head>

<body class="body min-vh-100" style="background-image: url('./assets/images/Polygon\ Luminary.svg');">
	<?php renderModalRename(); ?>
	<?php renderModaldelete(); ?>
	<?php renderModalAddFile(); ?>
	<?php renderModalAddFolder(); ?>
	<?php renderModalUploadFiles(); ?>
	<?php renderModalView(); ?>
	<?php renderModalEditFile(); ?>

	<?php renderHeader(); ?>
	<div class="row m-0">
		<div class=" col-12 col-md-4 col-lg-3 col-xl-2 p-0 overflow-hidden">
			<?php renderAside(); ?>
		</div>

		<div class="col-12 col-md-8 col-lg-9 col-xl-10 p-3 d-flex align-items-end flex-column">
			<section class="w-40 pb-4 d-flex justify-content-right flex-column">
				<?php renderSearch(); ?>
			</section>
			<?php renderBreadcrumbs(); ?>
			<?php renderTable(); ?>
		</div>
	</div>

</body>

</html>