<?php

require_once('partial/header.php');

?>

<main>

<h1>Bonjour</h1>
<h2>Liste des produits commercialisés :</h2>
<section>
<?php
foreach ($articles as $index => $article) {
    if ($article['is_published'] == true) {
    ?>
    <article>
        <h2><?php echo $article['id'] ?></h2>
        <p><?php echo $article['title'] ?> </p>
        <p><?php echo $article['content'] ?> euros</p>
        <p>Publié le : <?php echo $article['created_at']->format('Y-m-d') ?></p>
        <img src="<?php echo $article['image'] ?>" alt="">
        <p class="ftwght-bold"><?php echo $article['is_published'] ?></p>
        <!-- <a href=".php?index=<?php // echo $index; ?>">Voir l'article</a> -->
    </article>
<?php }} ?>
</section>

</main>

<?php require_once('partial/footer.php'); ?>