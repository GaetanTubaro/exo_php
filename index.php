<?php
require_once 'includes/variables.php';
require_once 'includes/function.php';
require_once 'includes/header.php'
?>

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

<?php
    require_once 'includes/footer.php'
?>