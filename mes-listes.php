<div>

<?php
    
    require_once __DIR__. "/templates/header.php";
    require_once  "lib/pdo.php";
    require_once  "lib/lists.php";
    require_once "lib/category.php";
    
    
    $categoryId = null;
    if(isset($_SESSION['user'])) {
        if (isset($_GET['category'])) {
            $categoryId = (int)$_GET['category'];
        }
        $lists = getListsByUserId($pdo, $_SESSION['user']['id'], $categoryId);
    }

    $categories = getCategories($pdo);

?>

<div class="container pb-5 mb-5 px-5">
    <div class="d-flex justify-content-between align-items-center py-5 mt-5">
        <h1 class="">Mes listes</h1>
        <?php if (isUserConnected()) { ?>
            <a href="ajout-modification-liste.php" class="btn btn-primary">Ajouter une liste</a>
        
        <form method="get">
            <label for="category" class="form-label">Catégories</label>
            <select name="category" id="category" onchange="this.form.submit()">
                <option value="">Toutes</option>
                
                <?php foreach($categories as $category) { ?>
                    <option <?=((int)$category['id'] === $categoryId ? 'selected="selected"': '' )?> value="<?=$category['id']?>"><?=$category['name']?></option>
                <?php } ?>
            </select>    
        </form>
        <?php } ?>
    </div>
    <div class="row py-5 my-5 container_bg">


    <?php if (isUserConnected()) { 
        if ($lists) {
            foreach ($lists as $list) { ?>
                    <div class="col-md-4 my-2 py-5">
                        <div class="card w-100">
                            <div class="card-header d-flex align-items-center justify-content-evenly">
                                <i class="bi bi-card-checklist"></i>
                                <h3 class="card-title"><?=$list['title']?></h3>
                            </div>
                            <div class="card-body d-flex flex-column">
                                <?php $items = getListItems($pdo, $list['id']); ?>
                                <?php if ($items) { ?>
                                <ul class="list-group">
                                    <?php foreach ($items as $item) { ?>
                                        <li class="list-group-item"><a class="me-2" href="ajout-modification-liste.php?id=<?=$list['id']?>&action=updateStatusListItem&redirect=list&item_id=<?=$item['id'] ?>&status=<?=!$item['status'] ?>"><i class="bi bi-check-circle<?=($item['status'] ? '-fill' : '')?>"></i></a> <?= $item['name'] ?></li>
                                        
                                        <?php } ?>
                                </ul>
                                <?php } ?>
                                <div class="d-flex justify-content-between align-items-end mt-2">                           
                                <a href="ajout-modification-liste.php?id=<?=$list['id']?>" class="btn btn-primary">Voir la liste</a>                           
                                    <span class="badge rounded-pill text-bg-primary">
                                        <i class="bi <?=$list['category_icon']?>"></i>
                                    <?=$list['category_name']?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
        <?php } else { ?>
            <p>Aucune liste</p>
        <?php } ?>
        
    <?php } else { ?>
    <div class="px-3 mx-3 pt-3 pb-5">
        <h3 class="pb-5">Pour consulter vos listes, vous devez vous connecter.</h3>
        <a href="login.php" class="btn btn-outline-primary me-2">Connexion</a>
        <?php } ?>
    </div>
</div>

<div class="pb-5"></div>

<?php require_once __DIR__. "/templates/footer.php"; ?>
</div>      