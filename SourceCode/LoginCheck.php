<?php
session_start();
$cookie_name = "username";
$cookie_value = "tousif";
setcookie($cookie_name, $cookie_value, time()+6, "/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Check</title>
</head>
<body>
    <h1>Login Check</h1>
<?php
$flag = 0;
if ($_SERVER['REQUEST_METHOD'] === "POST")

{
    function getdata($data)
    {
        $data=trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username=getdata($_POST['username']);
    $password=getdata($_POST['password']);
    // $confirmpassword=getdata($_POST['confirmpassword']);
    if(empty($username) or empty($password) )
    {
       echo "Please fill up the fields properly";
       
    }
    else
    {
        $flag=0;
        define("FILENAME", "../SourceCode/RegistrationInformation.json");
        $handle = fopen(FILENAME, "r");
        $fr = fread($handle, filesize(FILENAME)+1);
        $arr = json_decode($fr);
        $fc = fclose($handle);
        if ($arr === NULL) {
            echo "No record(s) found";
        }
        else
        {
            for ($i = 0; $i < count($arr); $i++) {
                if($arr[$i]->UserName==$username and $arr[$i]->Password==$password )
                {
                    $name=$arr[$i]->UserName;
                    $flag=1;
                    break;
                } 
             }
             if($flag==1)
             {
                 $_SESSION['username']=$name;
                header("Location:../SourceCode/DashBoard.php");
                 
             }
  
            // else if($password!=$confirmpassword)
            //  {
            //      echo "Password not match";
            //  }
            else
              {
                  $_SESSION['errormsg']="Log in failed";

                  header("Location:../SourceCode/Login.php");
              }
              if(isset($_POST['remember'])) {
                if(isset($_POST['submit'])) {
                    if(isset($_COOKIE["username"])) {
                        if(count($_COOKIE) > 0) {
                            header("Location: DashBoard.php");
                        }
                    }
                }
            }
                else if(!isset($_POST['remember'])) {
                    setcookie($cookie_name, $cookie_value, time()+360000, "/");
                    if(isset($_POST['submit'])) {
                        header('location:../SourceCode/DashBoard.php');
                    }
                }
            }
        }
    }
    

else
{
    die("Invalid Request");
}

?>
</body>
</html>
