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
                include_once("gauche.php")
                    ?>


            </div>


            <div class="col-9">

                <div class="card text-white ">
                    <div class="card-header  bg-info ">Mon panier </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>#</th>
                                    <th>D&eacute;signation de vos articles</th>
                                    <th width="15%">P.UT</th>
                                    <th>Quantit&eacute;</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require_once("functions.php");
                                $prods = getProductsFromPanier();
                                foreach($prods as $key=>$val){
                                ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <img src="images/<?=$val["id"] ?>.jpg" width="10%"> <?=$val["description"] ?>
                                    </td>
                                    <td> <?=$val["prix"] ?></td>
                                    <td><?= $_SESSION["panier"][$val["id"]] ?></td>
                                    <td>3000</td>
                                    <td><a class="btn btn-danger " href="">Suppimer </a></td>
                                </tr>
                                <?php
                                }
                              
                            ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>




            </div>

        </div>

    </div>


</body>

</html>