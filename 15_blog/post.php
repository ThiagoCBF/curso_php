<?php
    include_once("templates/header.php");
    
    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId) {
                $currentPost = $post;
            }

        }

    }

?>  
   <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['img'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore laborum numquam labore ipsum quam quidem enim iure cupiditate. Modi reiciendis eligendi odit optio illo enim ipsum. Hic dolorum laborum itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, eos amet dignissimos animi suscipit, voluptates inventore ipsum in itaque aliquid quasi! Ducimus similique aspernatur dolorem deserunt delectus porro modi totam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dignissimos, explicabo illo minima quod eveniet corrupti hic rem ab. Itaque non eum consequuntur voluptas voluptatum sint eveniet accusamus laborum molestiae.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
            </ul>

        </aside>
   </main>

<?php
    include_once("templates/footer.php")
    
?>  