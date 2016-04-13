<?php
	// session_start();

	if($_POST && $_FILES){

		$RegisterUsername = $_POST['RegisterUsername'];
		$Ptype = $_POST['expiry-month'];
		$price = $_POST['price'];
		$detail = $_POST['detail'];
		echo $_FILES['upfile']['error'];
		if($_FILES['upfile']['error'] != 0) {
			?> <script>
				alert("File Uploaded Error !!");
				window.location = "admin2.html";
			</script> <?php
			exit();
		}
		else{
			$upfile = $_FILES['upfile']['tmp_name'];

			$file = fopen($upfile, "r");
			$content = fread($file, filesize($upfile));
			$content = addslashes($content);
			fclose($file);

			$name = $_FILES['upfile']['name'];
			$type = $_FILES['upfile']['type'];
			$size = $_FILES['upfile']['size'];

			//echo $name."<br>".$type."<br>".$size;

			mysql_connect("localhost","root","");
			mysql_select_db("my_database_gis");
			$sql = "insert into products (PName, Type, Price, Detail, fileName, fileType, fileSize, fileContent) values ('".$RegisterUsername."', ".$Ptype.", ".$price.", '".$detail."', '".$name."', '".$type."', '".$size."', '".$content."')";
			$result = mysql_query($sql)or die(mysql_error());
			if($result){
				?><script>
					alert("Upload file complete ^__^");
					window.location = "admin2.html";
				</script><?php
			}
		}
	}
	?>