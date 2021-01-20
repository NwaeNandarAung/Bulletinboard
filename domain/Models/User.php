<?php

namespace Domain\Models;

use stdClass;

class User 
{
    public string $id;
    public string $name;
    public string $email;
    public string $password;
    public string $profile;
    public string $type;
    public string $phone;
    public string $address;
    public string $dob;
    public string $created_user_id;
    public string $updated_user_id;
    public string $created_at;
    public string $updated_at;

    private function __construct()
    {

    }

    public static function createInstance(stdClass $item)
    {
        $newInstance=new User();
        $newInstance->id = 1;
        $newInstance->name = $item->name;
        $newInstance->email = $item->email;
        $newInstance->password = $item->password;
        $newInstance->profile = $item->profile;
        $newInstance->type = $item->type;
        $newInstance->phone = '09789987678';
        $newInstance->address = 'Yangon';
        $newInstance->dob ='01-10-1997';
        $newInstance->created_user_id = $item->created_user_id;
        $newInstance->updated_user_id = $item->updated_user_id;
        $newInstance->created_at = $item->created_at;
        $newInstance->updated_at = $item->updated_at;
        return $newInstance;
    }
}