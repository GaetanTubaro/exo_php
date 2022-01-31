<?php

function ttcPrice($price)
{
    return $price / 1.2;
}
function displayProduct($key, Beanie $product)
{
?>
    <tr>
        <td><?= $product->getName() ?></td>
        <?php
        if ($product->getPrice() <= 12) {
        ?>
            <td style="color:green"> <?= number_format($product->getPrice(), 2, ',', ' ') ?> € </td>
        <?php } else { ?>
            <td style="color:blue"> <?= number_format($product->getPrice(), 2, ',', ' ') ?> € </td>
        <?php } ?>
        <td><?= number_format(ttcPrice($product->getPrice()), 2, ',', ' ') ?> €</td>
        <td><?= $product->getDesc() ?></td>
        <td><a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&quantity=more">Ajouter au panier</a></td>
    </tr>
<?php };


function displayProductCard($key, Beanie $product)
{
?>
    <div class="card m-2" style="width: 18rem;">
        <img src="<?= $product->getSrc() ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $product->getName() ?></h5>
            <h6><?= number_format($product->getPrice(), 2, ',', ' ') ?> €</h6>
            <p class="card-text"><?= $product->getDesc() ?></p>
            <a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&quantity=more">Ajouter au panier</a>
        </div>
    </div>
<?php
};
?>

<?php

function test($value)
{
    if (!empty($value) && $value != ' ') {
        return $value;
    } else {
        return false;
    }
}


?>