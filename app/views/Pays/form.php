<!DOCTYPE html>
<?php
include('../app/Views/header.php');
?>

<!-- Main content -->
<div class="container">
    <div class="row">
        <h4><?= $pays->name; ?></h4> <br>
        <form action=".?controller=Pays&action=update" class="" method="POST">
            <input type="hidden" name="pays" value="<?= $pays->id; ?>" />
            <input type="text" name="name" value="<?= $pays->name; ?>" />
            <input type="submit" />
        </form>
    </div>
</div>

<?= include('../app/Views/footer.php'); ?>