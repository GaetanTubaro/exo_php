<?php
include 'variables.php';
include 'function.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Index</th>
            <th>Nom</th>
            <th>Prix TTC</th>
            <th>Prix TVA</th>
            <th>Description</th>
        </tr>
        <?php foreach ($myProduct as $key => $product){
        ?>
        <?php DisplayProduct($key,$product); 
        }
        ?>
    </table>
</body>
</html>