<?php

use App\Models\Database;
use App\Models\Post;
use App\PostController;

require_once "..\app\Autoloader.php";

\App\Autoloader::register();

$layout = "layout1.php";

if (isset($_GET["controller"])) {
    $post = new PostController;
    $post->showAll();
} else {
    require_once implode(DIRECTORY_SEPARATOR, ["..", "pages", "home.php"]);
}