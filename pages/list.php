<?php
// if (isset($_GET['key'])) {
//     if (!isset($_SESSION['cart'])) {
//         $_SESSION['cart'] = [];
//     }
//     if (isset($_SESSION['cart'][$_GET['key']])) {
//         $_SESSION['cart'][$_GET['key']]++;
//     } else {
//         $_SESSION['cart'][$_GET['key']] = 1;
//     }
// }
?>

<table>
    <tr>
        <th>Nom</th>
        <th>Prix TTC</th>
        <th>Prix TVA</th>
        <th>Description</th>
    </tr>
    <?php foreach ($myProduct as $key => $product) {
        displayProduct($key, $product);
    }
    ?>
</table>