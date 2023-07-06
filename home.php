<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <?php
    include_once("haut.php");
    ?>


    <div class="container">


        <div class="row" style="margin-top: 20px;">



            <div class="col-3">

                <?php
                include_once("gauche.php");
                ?>


            </div>

            <div class="col-9">

                <div class="row">


                    <?php
                    require_once("functions.php");
                    $prods=getAllProduits();
                    if (isset($_GET["idcat"])) {
                        $prods=getAllProduitsByCatId($_GET["idcat"]);
                    }
                    
                    foreach ($prods as $key => $val) {


                        ?>
                        <div class="col-4">
                            <div class="card bg-light" style="width: 18rem;">
                                <img src="images/<?= $val["id"] ?>.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?= $val["description"] ?>
                                    </h5>
                                    <a href="addPanier.php?id=<?=$val["id"] ?>" class="card-link btn btn-primary">Acheter</a>
                                    <a href="#" class="card-link btn btn-danger">
                                        <?= $val["prix"] ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }

                    ?>




                </div>


            </div>

        </div>

    </div>


</body>

</html>