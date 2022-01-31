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