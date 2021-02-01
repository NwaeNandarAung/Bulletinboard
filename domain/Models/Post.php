<?php

namespace Domain\Models;

use stdClass;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post 
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $hidden = ['deleted_user_id'];

    public string $id;
    public $title;
    public $description;
    public $status;
    public $name;
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
        $newInstance->created_user_id = $item->created_user_id;
        $newInstance->created_at = date('d/m/Y', strtotime($item->created_at));
        return $newInstance;
    }

    public static function listInstance(stdClass $item)
    {
        $newInstance = new Post();
        $newInstance->id = $item->id;
        $newInstance->title = $item->title;
        $newInstance->description = $item->description;
        $newInstance->status = $item->status;
        $newInstance->name = $item->name;
        $newInstance->created_user_id = $item->created_user_id;
        $newInstance->created_at = date('d/m/Y', strtotime($item->created_at));
        return $newInstance;
    }
}