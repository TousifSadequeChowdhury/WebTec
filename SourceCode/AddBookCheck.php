<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Check</title>
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
    $username=getdata(@$_POST['username']);
    $address=getdata(@$_POST['address']);
    
    if(empty($username)   )
    {
       echo "Please fill Book name";
       
    }
   

    if ( empty($address) ){
    echo "Please fill Author";
  
   }
  
    else
    {
        define("FILENAME", "../SourceCode/BookInfor.json");
        $handle = fopen(FILENAME, "r");
        $fr = fread($handle, filesize(FILENAME)+1);
        $arr = json_decode($fr);
        $fc = fclose($handle);
        $handle = fopen(FILENAME, "w");
        if ($arr === NULL)
        {
            $id = 1;
            $data=array("Id" => $id,"UserName"=>"$username","Address"=>"$address");
            $data = array($data);
            $data = json_encode($data);
            $fw = fwrite($handle, $data);     
        }
        else
        {
            $id = $arr[count($arr)-1]->Id;
            
            $data=array("Id" => $id+1,"UserName"=>"$username","Address"=>"$address");
            $arr[] = $data;
            $data = json_encode($arr);
            $fw = fwrite($handle, $data);
        }
        $fc = fclose($handle);
        if($fw)
        {
            echo "<h2>Add Book Successful</h2>";
        }
    }
    
}
else
{
    die("Invalid Request");
}
?>
<br>
<a href="../SourceCode/BookListView.php" name="link" id="link" style="text-decoration: none;color:black">BACK</a><br>
<a href="../SourceCode/BookListView.php" name="link" id="link" style="text-decoration: none;color:black">Book List</a>
</body>
</html>
