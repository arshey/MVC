<h1>Liste des articles</h1>

<?php foreach($articles as $article): ?>
    <h2><a href="/articles/lire/<?= $article['id']; ?>" ><?= $article["titre"]; ?></a></h2>
    <p><?= $article["contenu"]; ?></p>
<?php endforeach; ?>