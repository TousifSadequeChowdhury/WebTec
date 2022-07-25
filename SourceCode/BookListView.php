<?php
    include('Header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile View</title>
</head>
<body>

	<h1>Book List</h1>

	<?php 
	
	
		define("FILENAME", "../SourceCode/BookInfor.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME)+1);
		$arr = json_decode($fr);
		$fc = fclose($handle);

		if ($arr === NULL) {
			echo "No record(s) found";
		}
		else {
			echo "<table border='1'>";
			echo "<thead>";
			echo "<tr>";
			echo "<th>Id</th>";
			echo "<th>Book</th>";
			echo "<th>Author</th>";
			echo "</tr>";
			echo "</thead>";
			echo "<tbody>";
			for ($i = 0; $i < count($arr); $i++) {
				echo "<tr>";
				echo "<td>" . $arr[$i]->Id . "</td>";
				echo "<td>" . $arr[$i]->UserName . "</td>";
				echo "<td>" . $arr[$i]->Address. "</td>";
				echo "</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		}
	?>

	<br><br>

	<a href="../SourceCode/AddBook.php">Add New Book</a>


</body>
</html>
<?php
    include('footer.php');
   
    ?>