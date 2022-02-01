<form class="d-flex justify-content-start p-2" method="POST">
    <select class="form-select w-25" aria-label="Default select example" name="size">
        <option value="" selected>Selectionner une matière</option>
        <?php foreach (Beanie::AVAILABLE_SIZES as $i => $size) { ?>
            <option value="<?= $size ?>"><?= $size ?></option>
        <?php } ?>
    </select>
    <select class="form-select w-25 mx-1" aria-label="Default select example" name="material">
        <option value="" selected>Selectionner une taille</option>
        <?php foreach (Beanie::AVAILABLE_MATERIALS as $i => $material) { ?>
            <option value="<?= $material ?>"><?= $material ?></option>
        <?php } ?>
    </select>
    <input type="number" class="form-control w-25" placeholder="Prix minimum" name="min">
    <input type="number" class="form-control w-25" placeholder="Prix maximum" name="max">
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
    if (!empty($_POST['size'])) {
        $criteriaSize = $_POST['size'];
        $products = array_filter(
            $myProduct,
            function (Beanie $product) use ($criteriaSize) {
                return $product->getSize() == $criteriaSize;
            }
        );
    }
    if (!empty($_POST['material'])) {
        $criteriaMaterial = $_POST['material'];
        $products = array_filter(
            $products,
            function (Beanie $product) use ($criteriaMaterial) {
                return $product->getMaterial() == $criteriaMaterial;
            }
        );
    }
    if (!empty($_POST['min'])) {
        $criteriaMin = $_POST['min'];
        $products = array_filter(
            $products,
            function (Beanie $product) use ($criteriaMin) {
                return $product->getPrice() >= $criteriaMin;
            }
        );
    }
    if (!empty($_POST['max'])) {
        $criteriaMax = $_POST['max'];
        $products = array_filter(
            $products,
            function (Beanie $product) use ($criteriaMax) {
                return $product->getPrice() <= $criteriaMax;
            }
        );
    }
    foreach ($products as $key => $product) {
        displayProduct($key, $product);
    }
    ?>
</table>