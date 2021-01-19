<?php

namespace Domain\Models;

use stdClass;

class Post 
{
    public string $id;
    public string $title;
    public string $description;
    public string $status;
    public string $created_user_id;
    public string $created_at;
    public string $updated_user_id;
    public string $updated_at;

    private function __construct()
    {

    }

    public static function createInstance(stdClass $item)
    {
        $newInstance=new Post();
        $newInstance->id = 1;
        $newInstance->title = $item->title;
        $newInstance->description = $item->description;
        $newInstance->status = 1;
        $newInstance->created_user_id = 1;
        $newInstance->created_at = date("Y-m-d H:i:s");
        $newInstance->updated_user_id = 1;
        $newInstance->updated_at = date("Y-m-d H:i:s");
        return $newInstance;
    }
}

