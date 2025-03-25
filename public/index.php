<?php 
session_start();

    require __DIR__ . "/../functions/dbConnector.php";
    require __DIR__ . "/../functions/helper.php";

    $title = "Accueil";
    $description = "La liste des films que j'ai regardé.";
    $keyword = "accueil, films, liste";

    $db = connectToDb();

    $request = $db->prepare("SELECT * FROM film");
    $request->execute();
    $film = $request->fetchAll();

    // dd($film);
?>

<?php require __DIR__ . "/../partials/head.php"; ?>

<?php require __DIR__ . "/../partials/nav.php"; ?>

    <main class="container">
        <h1 class="display-5 text-center my-3">Liste des films</h1>

        <?php if(isset($_SESSION['success']) && !empty($_SESSION['success']) ) : ?>
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <?= $_SESSION['success'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif ?>

        <div class="d-flex justify-content-end align-items-center my-3">
            <a href="create.php" class="btn btn-primary shadow">Ajouter un film</a>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-5 mx-auto">
                    <?php if(isset($film) && !empty($film)) : ?>
                        <?php foreach($film as $film) : ?>
                            <div class="card p-4 mb-3 shadow">
                                <p><strong>Nom du film</strong>: <?= $film['title'] ?></p>
                                <p><strong>Nom du/des acteurs</strong>: <?= $film['actors'] ?></p>
                                <hr>
                                <div>
                                    <a class="text-dark" data-bs-toggle="modal" data-bs-target="#modal-<?= $film['id'] ?>" href="#"><i class="fa-solid fa-eye"></i></a>
                                    <!-- <a href="" class="btn btn-secondary">Modifier</a>
                                    <a href="" class="btn btn-danger">Supprimer</a> -->
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-<?= $film['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $film['title'] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <p><strong>Note</strong>: <?= isset($film['rating']) && $film['rating'] !== "" ? $film['rating'] : 'Non renseignée';  ?></p>
                                        <p><strong>Commentaire</strong>: <?= isset($film['comment']) && $film['comment'] !== "" ? $film['comment'] : 'Non renseigné';  ?></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else :?>
                        <p>Aucun film pour l'instant</p>
                    <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php require __DIR__ . "/../partials/footer.php"; ?>

<?php require __DIR__ . "/../partials/scripts_foot.php"; ?>
