<?php

namespace App;

use App\Models\PostModel;

class PostController
{
    private array $posts = [];

    public function showAll()
    {
        $this->posts = [new PostModel(), new PostModel("New Title")];

        $posts = $this->posts;

        require_once implode(DIRECTORY_SEPARATOR, ["..", "pages", "posts.php"]);
    }
}
