<?php

namespace Domain\Models;

use stdClass;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post 
{
    use SoftDeletes;

    public string $id;
    public $title;
    public $description;
    public $status;
    public $user_name;
    public $created_user_id;
    public $created_at;

    private function __construct()
    {

    }

    public static function createInstance(stdClass $item)
    {
        $newInstance = new Post();
        $newInstance->id = $item->id;
        $newInstance->title = $item->title;
        $newInstance->description = $item->description;
        $newInstance->status = $item->status;
        $newInstance->user_name = 'Nwae';
        $newInstance->created_user_id = $item->created_user_id;
        $newInstance->created_at = date('d/m/Y', strtotime($item->created_at));
        return $newInstance;
    }
}