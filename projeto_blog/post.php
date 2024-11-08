<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;
    }

    foreach($posts as $post) {
        if($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt doloremque dignissimos quaerat rerum eum cum inventore deserunt repellat. Voluptate doloremque nihil error quo illum eum animi veritatis beatae fugiat distinctio!
            Porro, nisi facere? Dolor obcaecati quam expedita iure molestiae! Ullam ea similique placeat unde hic harum repellendus repellat repudiandae qui minima, temporibus suscipit iste molestias itaque voluptate facilis nesciunt at.
            Corporis voluptas odit ullam, optio ad quos quisquam autem delectus alias laudantium sequi quis cupiditate facere veritatis vero, itaque doloremque est expedita. Doloribus sed dolores animi minus magni tempora ab.
            Error adipisci porro totam quia atque, molestiae pariatur accusamus aperiam illo delectus soluta minima, omnis tempore nam labore numquam corrupti earum corporis ipsa quo? Doloremque nemo distinctio pariatur ratione rem.
            Debitis exercitationem a illo? Natus, debitis nihil nulla id labore blanditiis assumenda culpa accusantium? Dolore ullam sunt adipisci ipsam esse voluptas quis, nesciunt non? Distinctio, quae. Et soluta porro dolorem.</p>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt doloremque dignissimos quaerat rerum eum cum inventore deserunt repellat. Voluptate doloremque nihil error quo illum eum animi veritatis beatae fugiat distinctio!
            Porro, nisi facere? Dolor obcaecati quam expedita iure molestiae! Ullam ea similique placeat unde hic harum repellendus repellat repudiandae qui minima, temporibus suscipit iste molestias itaque voluptate facilis nesciunt at.
            Corporis voluptas odit ullam, optio ad quos quisquam autem delectus alias laudantium sequi quis cupiditate facere veritatis vero, itaque doloremque est expedita. Doloribus sed dolores animi minus magni tempora ab.
            Error adipisci porro totam quia atque, molestiae pariatur accusamus aperiam illo delectus soluta minima, omnis tempore nam labore numquam corrupti earum corporis ipsa quo? Doloremque nemo distinctio pariatur ratione rem.
            Debitis exercitationem a illo? Natus, debitis nihil nulla id labore blanditiis assumenda culpa accusantium? Dolore ullam sunt adipisci ipsam esse voluptas quis, nesciunt non? Distinctio, quae. Et soluta porro dolorem.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul class="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul class="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach ?>
            </ul>
        </aside>
    </main>
    
<?php include_once("templates/footer.php"); ?>