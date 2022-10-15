<?php ob_start(); ?>
<ul>
    <?php foreach($posts as $post): ?>
        <li>
            <?= $post->title; ?>
        </li>
    <?php endforeach; ?>
</ul>
    
<?php
    $content = ob_get_clean();
    $title = "Posts";
    use App\Layout;
    require_once implode(DIRECTORY_SEPARATOR, ["templates", Layout::getLayout()]);
