<?php
$cart = new Cart();
if (isset($_GET['quantity']) && isset($_GET['key'])) {
    $quantity = $_GET['quantity'];
    if ($quantity == "more") {
        $cart->add($_GET['key']);
    } elseif ($quantity == "less") {
        $cart->remove($_GET['key']);
    }
    header('Location: ?page=cart');
}
?>

<table>
    <?php
    if (!empty($_SESSION['cart'])) { ?>
        <tr>
            <th class="p-2">Nom</th>
            <th class="p-2">Prix</th>
            <th class="p-2">Quantité</th>
        </tr>
        <?php
        $priceTot = 0;
        foreach ($_SESSION['cart'] as $key => $quantity) { ?>
            <tr>
                <td class="p-2"><?= $myProduct[$key]->getName(); ?></td>
                <td class="p-2"><?= number_format($myProduct[$key]->getPrice() * $quantity, 2); ?> €</td>
                <td class="p-2"><?= $quantity; ?></td>
                <td><a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&quantity=more">+</a></td>
                <td><a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&quantity=less">-</a></td>
            </tr>
        <?php
            $priceTot += number_format($myProduct[$key]->getPrice() * $quantity, 2);
        } ?>
</table>
<p>Prix total : <?= $priceTot ?></p>
<?php } else { ?>
    <p class="p-3">Panier vide
    <p>
    <?php } ?>
    </table>