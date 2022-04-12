<?php
include_once("templates/header.php");

foreach ($posts as $post) {
    if ($post['id'] == $_GET['id']) {
        $post_atual = $post;
    }
}
?>

<main id="main_post">
    <div>
        <h1><?= $post_atual['title'] ?></h1>
        <p class="descricao_post"><?= $post_atual['descricao'] ?></p>
        <img src="img/<?= $post_atual['img'] ?>" alt="<?= $post_atual['title'] ?>">
        <p class="noticia_post">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto labore neque dolore at eveniet deleniti earum molestias in dignissimos. Repellat blanditiis aliquam architecto dolorem soluta ipsam voluptate autem corporis dignissimos!
            Repellendus laudantium, amet modi quis atque assumenda possimus voluptatum recusandae veniam illum nihil, a quidem magnam perferendis necessitatibus laborum vitae eum libero error repudiandae tempora cum deserunt. Deleniti, tenetur. Maxime.
            Ad in ipsum odio quos officia id laudantium minima ipsam illum autem labore minus, placeat dicta cumque ut esse! Est error autem, eius reprehenderit neque deserunt corporis nesciunt. Ipsa, laborum.
            Molestias itaque, ut iure repudiandae recusandae dolorum totam, error reiciendis natus rerum quia consectetur. Officiis commodi earum id cum a ducimus consequatur illum quisquam hic, vel quod rerum adipisci sunt.
            Voluptas nobis eaque perspiciatis amet, rerum aspernatur aut minima ad, voluptatem maiores iusto blanditiis sequi suscipit consequatur voluptatibus! Quod, ipsam dolores! Iusto omnis ullam veniam non minima rem ex placeat?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto labore neque dolore at eveniet deleniti earum molestias in dignissimos. Repellat blanditiis aliquam architecto dolorem soluta ipsam voluptate autem corporis dignissimos!
            Repellendus laudantium, amet modi quis atque assumenda possimus voluptatum recusandae veniam illum nihil, a quidem magnam perferendis necessitatibus laborum vitae eum libero error repudiandae tempora cum deserunt. Deleniti, tenetur. Maxime.</p><br>
    </div>
    <aside>
        <h3>Tags:</h3>
        <ul>
            <?php foreach ($post_atual['tags'] as $tag) : ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <br>
        <h3>Categorias:</h3>
        <ul>
            <?php foreach ($categorias as $categoria) : ?>
                <li><a href="#"><?= $categoria ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
include_once("templates/footer.php");
?>