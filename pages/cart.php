<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if (isset($_GET['quantity']) && isset($_GET['key'])) {
    $cart = $_SESSION['cart'];
    $quantity = $_GET['quantity'];
    $key = $_GET['key'];

    if ($quantity == "more") {
        if (!isset($cart[$key])) {
            $cart[$key] = 0;
        }
        $cart[$key]++;
    } elseif ($quantity == "less") {
        if ($cart[$key] <= 1) {
            unset($cart[$key]);
        } else {
            $cart[$key]--;
        }
    }
    $_SESSION['cart'] = $cart;
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
        foreach ($_SESSION['cart'] as $key => $quantity) { ?>
            <tr>
                <td class="p-2"><?= $myProduct[$key]['name']; ?></td>
                <td class="p-2"><?= number_format($myProduct[$key]['price'] * $quantity, 2); ?> €</td>
                <td class="p-2"><?= $quantity; ?></td>
                <td><a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&quantity=more">+</a></td>
                <td><a type="button" class="btn btn-light" href="?page=cart&key=<?= $key ?>&quantity=less">-</a></td>
            </tr>
        <?php }
    } else { ?>
        <p class="p-3">Panier vide
        <p>
        <?php } ?>
</table>