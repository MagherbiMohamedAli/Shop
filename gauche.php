<div class="list-group">
    <a href="home.php" class="list-group-item list-group-item-action active">
        Tous les Produits
    </a>
    <?php
    require_once("functions.php");
    $cats = getAllCategories();
    foreach ($cats as $key => $val) {

        ?>
        <a href="home.php?idcat=<?=$val["id"] ?>" class="list-group-item list-group-item-action">
        <?=$val["description"]?>
        </a>
        <?php
    }
    ?>

</div>