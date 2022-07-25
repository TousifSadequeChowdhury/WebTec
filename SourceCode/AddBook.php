<?php
    include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<body style="background-color:##ABA8A9;">

    <h1 style="text-align: center;">ADD BOOK</h1>

 <fieldset style="width: 30%; margin-left: 34%">
     <legend>Add New Book </legend>
     <form action="../SourceCode/AddBookCheck.php" method="POST" novalidate"> 
        <div class="username">
            <label for="username"  id="namelabel">Book Name</label><br>
            <input type="text" name="username" id="nametext" placeholder="Enter Book Name" required>
        </div><br>
    
    <div class="address">
      <label for="address" id="addresslebel">Author Name</label><br>
      <textarea name="address" id="addresstext" cols="25" rows="1" placeholder="Enter Author Name" required></textarea>
    </div><br>
      
  
    <div class="button">
      <input type="submit" name="submit" id="submit" value="ADD">
  
    </div>
     </form>
 </fieldset>
 <?php

    include('footer.php');
    ?>
</body>
</html>