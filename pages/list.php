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
    <?php displayProduct($key,$product); 
    }
    ?>
</table>

