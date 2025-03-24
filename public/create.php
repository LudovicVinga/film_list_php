<?php 
    $title = "Nouveau film";
    $description = "Ajouter un nouveau film a la liste...";
    $keyword = "Ajouter, nouveau, films, liste";
?>

<?php require __DIR__ . "/../partials/head.php"; ?>

    <?php require __DIR__ . "/../partials/nav.php"; ?>

    <main class="container-fluid">
        <h1 class="display-5 text-center my-3">Nouveau films</h1>

        <!-- Formulaire d'ajout d'un nouveau film -->
         <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 mx-auto bg-white p-4 rounded shadow">
                    <form method="post">
                        <div class="mb-3">
                            <label for="title">Titre du film <span class="text-danger">*</span></label>
                            <input type="text" name="title" id="title" class="form-control mt-2" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="actors">Nom du/des acteurs <span class="text-danger">*</span></label>
                            <input type="text" name="actors" id="actors" class="form-control mt-2">
                        </div>
                        <div class="mb-3">
                            <label for="rating">Note / 5</label>
                            <input type="number" min="0" max="5" step=".5" name="rating" id="rating" class="form-control mt-2">
                        </div>
                        <div class="mb-3">
                            <label for="comment">Laissez un commentaire</label>
                            <textarea name="comment" id="comment" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary shadow">
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </main>

    <?php require __DIR__ . "/../partials/footer.php"; ?>

<?php require __DIR__ . "/../partials/scripts_foot.php"; ?>
