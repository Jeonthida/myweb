<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="relogin.css">
</head>
<body>
    <h1> ยินดีต้อนรับ </h1>
    
    
        <?php
            $showuser = $_POST['user'];
            echo "Welcome to cs supermarket websit: $showuser";
        ?>
   <form action="shopping.html">
    shopping click here! <br><br>
    <input type="submit" name="shop" value="shopping here!" class="button">
</form>

</body>
</html>



