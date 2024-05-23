 <section class="col-6">
     <div>
         <h2>Nos Boutiques</h2>
         <img class="w-100" src="./image/header/shopPres.png" alt="img" />
     </div>

     <?php
        $sql = "SELECT * from porsche_shops ORDER BY id LIMIT 2";

        try {
            // Envoyer la requête à MySQL 
            $shops = $BDD->query($sql);
        } catch (PDOexception $ex) {
            // SI ça ne marche pas, gérer l'erreur 
            print 'Erreur!' . $ex->getMessage();
            exit;
        }

        while ($shop = $shops->fetch()) {
        ?>

         <div class="d-flex row mt-5">
             <div class="col-6">
                 <img src="./image/img_boutique /<?php print $shop->image; ?>" class="w-100" />
             </div>

             <div class="align-items-center row col-6">
                 <h4><?php print $shop->Boutique_name; ?></h4>
             </div>



         <?php
        }
            ?>
         <button type="button" class="justify-content-center mt-5 btn btn-outline-dark btn-sm"><a href="section_boutique.php">See more</a></button>
         </div>
 </section>