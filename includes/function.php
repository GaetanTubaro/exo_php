<?php
function ttcPrice($price) {
    return $price * 0.8;
}
function displayProduct($key,Array $product){
            echo
            "<tr>
            <td>" . $key . "</td>
            <td>" . $product['name'] . "</td>
            <td ";
            if($product['price'] <= 12){
                echo'style="color:green"';
            } else {
                echo'style="color:blue"';
            }
            echo ">" . $product['price'] . " €</td>
            <td>" . ttcPrice($product['price']) . " €</td>
            <td>" . $product['desc'] . "</td>
            </tr>";
}


function displayProductCard(array $product){
?>
<div class="card m-2" style="width: 18rem;">
<?= '<img src="' . $product['src'] . '" class="card-img-top" alt="...">'
?>
<div class="card-body">
<?= '<h5 class="card-title">"' . $product['name'] . '"</h5>'
?>
<?= '<h6 ">"' . $product['price'] . ' €"</h6>'
?>
<?= '<p class="card-text">"' . $product['desc'] . '"</p>'
?>
</div>
</div>

<?php }?>