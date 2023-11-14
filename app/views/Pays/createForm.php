<!DOCTYPE html>
<?php
include('../app/Views/header.php');
?>
    
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                <h1>Create a new Pays</h1>
                    <form class="form" action="?controller=Pays&action=create" method="post">
                        <label for="name">Pays Name:</label>
                        <input class="form-control" type="text" id="name" name="name" required>

                        <!-- Ajoutez d'autres champs du formulaire si nécessaire -->
                        <button class="btn btn-primary" type="submit">Create Pays</button>
                    </form>
                    <p><a href="?controller=Pays&action=index">Back to Pays list</a></p>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
<?= include('../app/Views/footer.php'); ?>