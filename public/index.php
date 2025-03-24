<?php 
    $title = "Accueil";
    $description = "La liste des films que j'ai regardé.";
    $keyword = "accueil, films, liste";
?>

<?php require __DIR__ . "/../partials/head.php"; ?>

    <?php require __DIR__ . "/../partials/nav.php"; ?>

    <main class="container">
        <h1 class="display-5 text-center my-3">Liste des films</h1>

        <div class="d-flex justify-content-end align-items-center my-3">
            <a href="create.php" class="btn btn-primary shadow">Ajouter un film</a>
        </div>
    </main>

    <?php require __DIR__ . "/../partials/footer.php"; ?>

<?php require __DIR__ . "/../partials/scripts_foot.php"; ?>
