<!DOCTYPE html>
<?php
	function createDirectory() {
		$add = $_POST["add"];
		mkdir("./uploads/".$add);
		
	}
?>
<html>
	<head>
		<title>
			Create directory with HTML button and PHP
		</title>
	</head>
	
	<body>
	<?php
		if (!isset($_POST['submit'])) {
	?>
		<form action = "" method = "post">
			
			<table>
			<tr>
				<td style = " border-style: none;"></td>
				<td style = "font-weight: bold">
					Folder Name:
				</td>
				
				<td>
					<input type = "text" style = "width: 120px;"
					class = "form-control" name = "add" id = "add" />
				</td>
				
				<td colspan = "2">
					<input type = "submit" name = "submit"
						value = "Create" />
				</td>
			</tr>
			</table>
		</form>
	<?php
		}
		else {
			createDirectory();
			
		}
	?>
	</body>
</html>
