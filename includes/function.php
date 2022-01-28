<?php
function ttcPrice($price)
{
    return number_format($price / 1.2, 2);
}
function displayProduct($key, array $product)
{
?>
    <tr>
        <td><?= $product['name'] ?></td>
        <?php
        if ($product['price'] <= 12) {
        ?>
            <td style="color:green"> <?= $product['price'] ?> € </td>
        <?php } else { ?>
            <td style="color:blue"> <?= $product['price'] ?> € </td>
        <?php } ?>
        <td><?= ttcPrice($product['price']) ?> €</td>
        <td><?= $product['desc'] ?></td>
        <td><a type="button" class="btn btn-light" href="?page=list&key=<?= $key ?>">Ajouter au panier</a></td>
    </tr>
<?php };


function displayProductCard(array $product)
{
?>
    <div class="card m-2" style="width: 18rem;">
        <img src="<?= $product['src'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $product['name'] ?></h5>
            <h6><?= number_format($product['price'], 2) ?> €</h6>
            <p class="card-text"><?= $product['desc'] ?></p>
        </div>
    </div>
<?php
};
?>