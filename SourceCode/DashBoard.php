<?php
     session_start();
    //  setcookie("username", "tousif", time()+ 6,'/'); // expires after 6 seconds

?>

<?php
include('Header.php');

if(!isset($_SESSION['username']))
{
    header("Location:../SourceCode/Login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dash Board</title>
</head>
<body>
    <?php
if(!isset($_COOKIE['username'])) {
            session_unset();
            session_destroy();
            header('location:../SourceCode/Login.php');
        }
        ?>
<fieldset>
<?php
echo "<h2>Welcome  ".$_SESSION['username']."</h2>";
echo "<h4 style='text-align: right;'><a style='text-decoration: none;'href='Logout.php'>Logout</a></h4>"
?>	
</fieldset>
<h3 style="text-align: left;">
		<a style="text-decoration: none;" href="../SourceCode/bookListView.php">Book List</a></h3>
<h3 style="text-align: left;">
		<a style="text-decoration: none;" href="../SourceCode/ProfileView.php">User Information</a></h3>
<h3 style="text-align: left;">
		<a style="text-decoration: none;" href="SearchBook.php">Search Book</a></h3>       
        <h3 style="text-align: left;">
		<a style="text-decoration: none;" href="ChangePassword.php">Change Password</a></h3>
        <h3 style="text-align: left;">
		<a style="text-decoration: none;" href="Newspaper.php">Newspaper</a></h3>
   
   <?php
    include('footer.php');
   
    ?>
</body>
</html>