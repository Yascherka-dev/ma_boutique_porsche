       <?php

        include_once("config.php");
        include_once("header.php");
        ?>

       <section class="mt-5 row">

           <div class="container-fluid">
               <h2 class="text-center mb-5">Nos Modèles</h2>
               <img class="w-100" src="./image/header/productPres.png" alt="img" />
           </div>
           <div class="row mt-5">
               <?php
                $sql = "SELECT * from porsche_products ORDER BY id  LIMIT 6";

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



                   <div class="col-6">
                       <img src="./image/img_products/<?php print $car->image; ?>" class="w-100" />

                       <h4><?php print $car->name; ?></h4>
                       <p>
                           <?php print $car->description; ?>
                       </p>
                   </div>






               <?php
                }
                ?>
           </div>

       </section>

       <?php

        include_once("footer.php");

        ?>