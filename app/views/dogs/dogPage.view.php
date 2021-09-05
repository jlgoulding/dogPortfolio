<?php
require($_SERVER["DOCUMENT_ROOT"] . '/app/views/partials/head.php');
// var_dump($dogs);
?>
<div class="container-md">
    <h1>Welcome to <?= $dogs['0']->name; ?>'s Page</h1>
    <div class="card">
        <img src="<?= $dogs['0']->image; ?>" class="card-img-top img-card" alt="...">
        <div class="card-body">
            <h4 class="card-title">Call Name - <?= $dogs['0']->name; ?></h4>
            <h5 class="card-title">Show Name - <?= $dogs['0']->showName; ?></h5>
            <h5 class="card-title">DOB - <?= $dogs['0']->dob; ?></h5>
            <h5 class="card-title">Owned By - <?= $dogs['0']->owner; ?></h5>
        </div>
    </div>

    <!-- Image gallery start -->
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php foreach ($dogsImg as $dogImage) : ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $dogImage->image; ?>" class="card-img-top" alt="...">
                    <h4 class="card-title">Call Name - <?= $dogImage->name; ?></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- Image gallery end -->
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . '/app/views/partials/footer.php'); ?>