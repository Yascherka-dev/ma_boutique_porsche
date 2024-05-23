<section class="row mt-5">
    <div class="col-12">

        <img src="./image/header/big1.png" alt="" class="card-img-top" />
    </div>
</section>


<?php
$sql = "SELECT * from porsche_presentation ORDER BY title LIMIT 1";

try {
    // Envoyer la requête à MySQL 
    $presentations = $BDD->query($sql);
} catch (PDOexception $ex) {
    // SI ça ne marche pas, gérer l'erreur 
    print 'Erreur!' . $ex->getMessage();
    exit;
}

while ($presentation = $presentations->fetch()) {
?>
    <section class="row mt-5">
        <div class="col-5">
            <img class="w-100" src="./image/img_presentation/<?php print $presentation->image; ?>" alt="img" />
        </div>
        <div class="col-7">
            <h2><?php print $presentation->title; ?></h2>
            <p>
                <?php print $presentation->text; ?>
            </p>
        </div>
    </section>

<?php
}
