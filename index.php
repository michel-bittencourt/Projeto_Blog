<?php
include_once("templates/header.php");
?>
<main>
  <div id="titulo">
    <h1>Blog Codar</h1>
    <p>O SEU BLOG DE PROGRAMAÇÃO</p>
  </div>
  <div id="container_posts">
    <?php foreach ($posts as $post) : ?>
      <div class="caixa_post">
        <h2 class="titulo_post">
          <a href="post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
        </h2>
        <img src="img/<?= $post['img'] ?>">
        <p class="desc_post"><?= $post['descricao'] ?></p>
        <?php foreach ($post['tags'] as $tag) : ?>
          <a href="#"><?= $tag ?></a>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</main>
<?php
include_once("templates/footer.php");
?>