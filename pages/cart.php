<?php
if (isset($_GET['quantity'])) {
    if ($_GET['quantity'] == "more") {
        $_SESSION['cart'][$_GET['key']]++;
    } elseif ($_GET['quantity'] == "less") {
        if ($_SESSION['cart'][$_GET['key']] == 1) {
            unset($_SESSION['cart'][$_GET['key']]);
        } else {
            $_SESSION['cart'][$_GET['key']]--;
        }
    }
}
?>

<table>
    <?php
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
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