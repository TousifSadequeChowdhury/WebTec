<?php
    include('Header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Book</title>
</head>
<body style="background-color: #FFFFFF;">
    <h2>Search Book</h2>
    <fieldset>
        
        <form action="../SourceCode/BookListCheck.php" method="POST" novalidate>
        <div class="">
        <label for=""  id="">Search Here</label><br>
        <input type="text" name="id" id="" placeholder="Search by book name" required>
      </div><br>

      <div class="searchbutton">
        <input type="submit" name="submit"id="submit" value="Search">
      </div><br>
    </form>
    </fieldset>
</body>
</html>
<?php
    include('footer.php');
    ?>