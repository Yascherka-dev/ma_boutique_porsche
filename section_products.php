        <section class="col-6">

            <div>
                <h2>Nos Modèles</h2>
                <img class="w-100" src="./image/header/productPres.png" alt="img" />
            </div>

            <?php
            $sql = "SELECT * from porsche_products ORDER BY id DESC LIMIT 2";

            try {
                // Envoyer la requête à MySQL 
                $cars = $BDD->query($sql);
            } catch (PDOexception $ex) {
                // SI ça ne marche pas, gérer l'erreur 
                print 'Erreur!' . $ex->getMessage();
                exit;
            }

            while ($car = $cars->fetch()) {
            ?>

                <div class="d-flex row mt-5">
                    <div class="col-6">
                        <img src="./image/img_products/<?php print $car->image; ?>" class="w-100" />
                    </div>

                    <div class="align-items-center row col-6">
                        <h4 class=""><?php print $car->name; ?></h4>
                    </div>


                <?php
            }
                ?>

                <button type="button" class="justify-content-center mt-5 btn btn-outline-dark btn-sm"><a href="section_product.php">See more</a></button>
                </div>
        </section>