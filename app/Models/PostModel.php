<?php

namespace App\Models;

class PostModel
{

    public function __construct(private string $title = "Unknown")
    {
        
    }

    public function __get($prop) : String | Null
    {
        return ($prop === "title") ? $this->title : null;
    }
}