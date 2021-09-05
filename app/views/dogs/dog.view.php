<?php
require($_SERVER["DOCUMENT_ROOT"] . '/app/views/partials/head.php');
?>
<div class="container-xxl">
    <h1>All Dogs in the dog folder</h1>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($dogs as $dog) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $dog->image; ?>" class="card-img-top img-card " alt="...">
                    <div class="card-body">
                        <h4 class="card-title"><?= $dog->name; ?></h4>
                        <h5 class="card-title"><?= $dog->showName; ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="/dogs/dog?id=<?php echo $dog->id; ?>" class="btn dg-btn"><?= $dog->name; ?>'s page</a>
                    </div>
                </div>

            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . '/app/views/partials/footer.php'); ?>