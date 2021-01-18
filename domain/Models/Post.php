<?php

namespace Domain\Models;

use stdClass;

class Post 
{
    public string $title;
    public string $description;

    private function __construct()
    {

    }

    public static function createInstance(stdClass $item)
    {
        $newInstance=new Post();
        $newInstance->title = $item->title;
        $newInstance->description = $item->description;
        $newInstance->created_user_id = $item->created_user_id;
        $newInstance->created_at = $item->created_at;

        return $newInstance;
    }
}

