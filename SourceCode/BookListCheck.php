<?php
    include('Header.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Book Information</title>
</head>
<body>

	<?php 
	
	if ($_SERVER['REQUEST_METHOD'] === "POST")

	{
		function getdata($data)
		{
			$data=trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$id=getdata($_POST['id']);
		
		if(empty($id))
		{
		   echo "Field required";
		   
		}
		else
		{
			$flag=0;
			define("FILENAME", "../SourceCode/BookInfor.json");
		$handle = fopen(FILENAME, "r");
		$fr = fread($handle, filesize(FILENAME)+1);
		$arr = json_decode($fr);
		$fc 	= fclose($handle);

		if ($arr === NULL) {
			echo "Sorry, No Book Found";
		
		}
			else
			{
				for ($i = 0; $i < count($arr); $i++) {
					if($arr[$i]->UserName==$id)
					{
						$name=$arr[$i]->UserName;
						
				
						$address=$arr[$i]->Address;
					
						$flag=1;
						break;
					} 
					else
					{
						$flag=0;
					}
				 }
				 if($flag==1)
				 {
					 
					echo "<table border='1'>";
					echo "<thead>";
					echo "<tr>";
					echo "<th>Name</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
			
						echo "<tr>";
						echo "<td>" .$name . "</td>";		
						echo "<td>" . $address. "</td>";
						echo "</tr>";
					
					echo "</tbody>";
					echo "</table>";
					 
				 }
				else
				  {
					    echo "<h2 >Sorry, No Book Found</h2>";
				  }
			}
		}
		
	}
	else
	{
		die("Invalid Request");
	}
	?>

	<br><br>

	<a href="../SourceCode/SearchBook.php">Go back</a>


</body>
</html>

<?php
    include('footer.php');
   
    ?>