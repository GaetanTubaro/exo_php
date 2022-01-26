<?php
function TttPrice($price) {
    return $price * 0.8;
}
function DisplayProduct($key,Array $product){
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
            echo ">" . $product['price'] . "</td>
            <td>" . TttPrice($product['price']) . "</td>
            <td>" . $product['desc'] . "</td>
            </tr>";
}
?>