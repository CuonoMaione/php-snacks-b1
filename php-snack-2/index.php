<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    
    <form action="./" method="GET" >
    <label for="name">Name</label>
    <input type="text" name="name" >
    <label for="email"> Email</label>
    <input type="email" name="email">
    <label for="age">Age</label>
    <input type= "text" name="age">
    <input type="submit" value="send">
    </form>

<?php



?>



    <h2><?php echo  $_GET['name']  ?></h2>
    <h2><?php echo "$_GET[email]" ?></h2>
    <h2><?php echo "$_GET[age]" ?></h2>
</body>
</html>