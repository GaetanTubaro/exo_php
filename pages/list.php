<form class="d-flex justify-content-start p-2" method="POST">
    <select class="form-select w-25" aria-label="Default select example" name="size">
        <option value="" selected>Selectionner une matière</option>
        <?php foreach (Beanie::AVAILABLE_SIZES as $i => $size) { ?>
            <option value="<?= $size ?>" <?php if (isset($_POST['size']) && $_POST['size'] == $size) echo "selected"; ?>><?= $size ?></option>
        <?php } ?>
    </select>
    <select class="form-select w-25 mx-1" aria-label="Default select example" name="material">
        <option value="" selected>Selectionner une taille</option>
        <?php foreach (Beanie::AVAILABLE_MATERIALS as $i => $material) { ?>
            <option value="<?= $material ?>" <?php if (isset($_POST['material']) && $_POST['material'] == $material) echo "selected"; ?>><?= $material ?></option>
        <?php } ?>
    </select>
    <input type="number" class="form-control w-25" placeholder="Prix minimum" name="min" <?php if (isset($_POST['min'])) { ?> <?= 'value="' ?><?= $_POST['min'] ?><?= '"' ?> <?php } ?>>
    <input type="number" class="form-control w-25" placeholder="Prix maximum" name="max" <?php if (isset($_POST['max'])) { ?> <?= 'value="' ?><?= $_POST['max'] ?><?= '"' ?> <?php } ?>>
    <button class="btn btn-light mx-1" type="submit">Chercher</button>
</form>







<table>
    <tr>
        <th>Nom</th>
        <th>Prix TTC</th>
        <th>Prix HT</th>
        <th>Description</th>
    </tr>
    <?php
    $products = $myProduct;
    $filter = new BeanieFilter;
    if (!empty($_POST['size'])) {
        $products = array_filter(
            $products,
            function (Beanie $product) use ($filter) {
                return $product->getSize() == $filter->getSize();
            }
        );
    }
    if (!empty($_POST['material'])) {
        $products = array_filter(
            $products,
            function (Beanie $product) use ($filter) {
                return $product->getMaterial() == $filter->getMarterial();
            }
        );
    }
    if (!empty($_POST['min'])) {
        $products = array_filter(
            $products,
            function (Beanie $product) use ($filter) {
                return $product->getPrice() >= $filter->getMin();
            }
        );
    }
    if (!empty($_POST['max'])) {
        $products = array_filter(
            $products,
            function (Beanie $product) use ($filter) {
                return $product->getPrice() <= $filter->getMax();
            }
        );
    }
    foreach ($products as $key => $product) {
        displayProduct($key, $product);
    }
    ?>
</table>