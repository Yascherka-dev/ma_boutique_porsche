   <section class="mt-5">
       <h2>Actualités</h2>
       <div class="card-group">

           <?php
            $sql = "SELECT * from porsche_news ORDER BY publication DESC LIMIT 3";

            try {
                // Envoyer la requête à MySQL 
                $news = $BDD->query($sql);
            } catch (PDOexception $ex) {
                // SI ça ne marche pas, gérer l'erreur 
                print 'Erreur!' . $ex->getMessage();
                exit;
            }

            while ($new = $news->fetch()) {
            ?>
               <div class="card">
                   <img src="./image/img_news/<?php print $new->image; ?>" class="card-img-top " alt="$new->title" />
                   <div class="card-body">
                       <h5 class="card-title"><?php print $new->title; ?></h5>
                       <p class="card-text">
                           <?php print $new->accroche; ?>
                       </p>
                   </div>
               </div>
           <?php
            }
            ?>
       </div>
   </section>