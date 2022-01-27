<?php
    require_once 'includes/variables.php';
    require_once 'includes/function.php';
    require_once 'includes/header.php';

?>
<div class="d-flex">
<?php 
    for ($i = 0; $i < 3; $i++){
        displayProductCard($myProduct[$i]);
    }
?>
</div>
<a href="list.php" class="btn btn-primary m-2">Voir tout les produits</a>

<?php
    require_once 'includes/footer.php';
?>