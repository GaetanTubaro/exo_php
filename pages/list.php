<form class="d-flex justify-content-start p-2" method="GET">
    <select class="form-select w-25" aria-label="Default select example">
        <option selected>Selectionner une matière</option>
        <?php foreach (Beanie::AVAILABLE_SIZES as $i => $size) { ?>
            <option value="<?= $i ?>"><?= $size ?></option>
        <?php } ?>
    </select>
    <select class="form-select w-25 mx-1" aria-label="Default select example">
        <option selected>Selectionner une taille</option>
        <?php foreach (Beanie::AVAILABLE_MATERIALS as $i => $material) { ?>
            <option value="<?= $i ?>"><?= $material ?></option>
        <?php } ?>
    </select>
    <input type="text" class="form-control w-25" placeholder="Prix" name="price">
    <button class="btn btn-light mx-1" type="submit">Chercher</button>
</form>


<table>
    <tr>
        <th>Nom</th>
        <th>Prix TTC</th>
        <th>Prix HT</th>
        <th>Description</th>
    </tr>
    <?php foreach ($myProduct as $key => $product) {
        displayProduct($key, $product);
    }
    ?>
</table>