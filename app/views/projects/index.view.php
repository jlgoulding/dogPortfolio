<?php require('app\views\partials\head.php');
?>

<h1>projects index</h1>


<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Owner</th>
        <th>tasks</th>
        <th>datecreated</th>
        <th>enddate</th>
    </tr>
    <tbody class="row_position">
        <?php foreach ($projects as $project) : ?>
            <tr id="<?= $project->id; ?>">
                <td><?= $project->id; ?></td>
                <td><?= $project->name; ?></td>
                <td><?= $project->owner; ?></td>
                <td><?= $project->tasks; ?></td>
                <td><?= $project->datecreated; ?></td>
                <td><?= $project->enddate; ?></td>
            </tr>
        <?php endforeach; ?>


    </tbody>
</table>
<ul id="sortable">
    <?php foreach ($projects as $project) : ?>

        <li><?= $project->name; ?></li>
    <?php endforeach; ?>
</ul>

<?php require('app\views\partials\footer.php'); ?>