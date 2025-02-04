<div class="min-vh-100">

<?php 

    require_once __DIR__. "/templates/header.php"; 

?>

<div class="container col-xxl-8 py-5 my-5 h-75">
    <h1>Liste</h1>

    <div class="accordion" id="accordionExample">
    <div class="accordion-item">
    <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Ajouter une liste
        </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Catégorie</label>
                    <select name="category_id" id="category_id" class="form-control">
                        <option value="test">Test</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Enregistrer" name="saveList" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

</div>


</div>



<?php require_once __DIR__. "/templates/footer.php" ?>
</div>