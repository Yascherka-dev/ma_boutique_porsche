<?php

include_once("config.php");
include_once("header.php");


$sql = "SELECT * from porsche_carousel ORDER BY id LIMIT 3";
try {
    // Envoyer la requête à MySQL 
    $carousels = $BDD->query($sql);
} catch (PDOexception $ex) {
    // SI ça ne marche pas, gérer l'erreur 
    print 'Erreur!' . $ex->getMessage();
    exit;
}
?>

<section class="mt-5">
    <div id="carouselExampleCaptions" class="carousel slide">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label=" Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <?php

            while ($carousel = $carousels->fetch()) {
            ?>

                <div class="carousel-item active">
                    <img src="./image/carousel/<?php print $carousel->image ?>" class="d-block w-100" alt="img">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php print $carousel->title ?></h5>
                        <p><?php print $carousel->text ?></p>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



</section>

<?php

include_once("footer.php");
