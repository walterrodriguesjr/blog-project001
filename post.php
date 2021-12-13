<?php
include_once "templates/header.php";
if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
        if ($post['id'] == $postId) {
            $currentPost = $post;
        }
    }
}
?>
<body>
 <main id="post-container">
     <div class="content-container">
         <h1 id="main-title"><?=$currentPost['title']?></h1>
         <p id="post-description"><?=$currentPost['description']?></p>
         <div class="img-container">
             <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
         </div>
         <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum hic corporis neque natus, nostrum commodi officia. Sed dolor nostrum ducimus officiis ipsa quisquam? A numquam libero assumenda, sint nulla nostrum?
         Accusamus eligendi quidem modi quo ad asperiores? Eaque necessitatibus perferendis voluptates omnis repellendus possimus dolorum facilis saepe, odit, tempore accusamus reiciendis tenetur consequatur, iste ea totam sed vitae vero recusandae?
         Consequuntur incidunt eaque nesciunt iste beatae dolorum repellendus nobis nemo earum molestiae, quas magni modi eum. Totam voluptatibus fuga dolores iure voluptates officiis, aperiam sequi, velit expedita repellat voluptatum quia?
         Amet porro culpa, placeat similique consequatur temporibus quia, ducimus inventore officiis quam debitis et veniam ipsum magni? Minus consequuntur reprehenderit, officiis iste illum nesciunt corrupti, optio animi voluptatem, officia molestiae.
         Temporibus doloremque fuga id, iusto recusandae, qui dolore obcaecati aperiam reiciendis culpa est ex fugit harum consectetur cupiditate numquam laborum aliquam, eius aut voluptas! Omnis quos pariatur numquam rerum fugiat!</p>
         <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum hic corporis neque natus, nostrum commodi officia. Sed dolor nostrum ducimus officiis ipsa quisquam? A numquam libero assumenda, sint nulla nostrum?
             Accusamus eligendi quidem modi quo ad asperiores? Eaque necessitatibus perferendis voluptates omnis repellendus possimus dolorum facilis saepe, odit, tempore accusamus reiciendis tenetur consequatur, iste ea totam sed vitae vero recusandae?
             Consequuntur incidunt eaque nesciunt iste beatae dolorum repellendus nobis nemo earum molestiae, quas magni modi eum. Totam voluptatibus fuga dolores iure voluptates officiis, aperiam sequi, velit expedita repellat voluptatum quia?
             Amet porro culpa, placeat similique consequatur temporibus quia, ducimus inventore officiis quam debitis et veniam ipsum magni? Minus consequuntur reprehenderit, officiis iste illum nesciunt corrupti, optio animi voluptatem, officia molestiae.
             Temporibus doloremque fuga id, iusto recusandae, qui dolore obcaecati aperiam reiciendis culpa est ex fugit harum consectetur cupiditate numquam laborum aliquam, eius aut voluptas! Omnis quos pariatur numquam rerum fugiat!</p>
       
         <p class="post-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum hic corporis neque natus, nostrum commodi officia. Sed dolor nostrum ducimus officiis ipsa quisquam? A numquam libero assumenda, sint nulla nostrum?
             Accusamus eligendi quidem modi quo ad asperiores? Eaque necessitatibus perferendis voluptates omnis repellendus possimus dolorum facilis saepe, odit, tempore accusamus reiciendis tenetur consequatur, iste ea totam sed vitae vero recusandae?
             Consequuntur incidunt eaque nesciunt iste beatae dolorum repellendus nobis nemo earum molestiae, quas magni modi eum. Totam voluptatibus fuga dolores iure voluptates officiis, aperiam sequi, velit expedita repellat voluptatum quia?
             Amet porro culpa, placeat similique consequatur temporibus quia, ducimus inventore officiis quam debitis et veniam ipsum magni? Minus consequuntur reprehenderit, officiis iste illum nesciunt corrupti, optio animi voluptatem, officia molestiae.
             Temporibus doloremque fuga id, iusto recusandae, qui dolore obcaecati aperiam reiciendis culpa est ex fugit harum consectetur cupiditate numquam laborum aliquam, eius aut voluptas! Omnis quos pariatur numquam rerum fugiat!</p>
     </div>
 
     <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul class="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?=$tag?></a></li>
            <?php endforeach;?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
        <?php foreach ($categories as $category): ?>
            <li><a href="#"><?=$category?></a></li>
            <?php endforeach;?>
        </ul>
     </aside>
 </main>
 <?php
include_once "templates/footer.php";
?>
