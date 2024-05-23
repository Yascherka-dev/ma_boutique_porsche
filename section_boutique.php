<?php

include_once("config.php");
include_once("header.php");
?>

<section class="mt-5 row">
    <div class="container-fluid">
        <h2 class="text-center mb-5">Nos Boutiques</h2>
        <img class="w-100" src="./image/header/shopPres.png" alt="img" />
    </div>

    <?php
    $sql = "SELECT * from porsche_shops ORDER BY id LIMIT 10";

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

        <div class="row mt-5">
            <div class="col-6">
                <img src="./image/img_boutique /<?php print $shop->image; ?>" class="w-100" />
            </div>

            <div class="row col-6">
                <h4><?php print $shop->Boutique_name; ?></h4>
                <p>
                    <?php print $shop->Adresse; ?>
                </p>
            </div>
        </div>

    <?php
    }
    ?>


</section>

<?php

include_once("footer.php");

?>