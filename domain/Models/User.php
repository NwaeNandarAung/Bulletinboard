<?php

namespace Domain\Models;

use stdClass;

class User 
{
    public string $email;
    public string $password;

    private function __construct()
    {

    }

    public static function createInstance(stdClass $item)
    {
        $newInstance=new User();
        $newInstance->email = $item->email;
        $newInstance->password = $item->password;

        return $newInstance;
    }
}