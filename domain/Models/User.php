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
        $newInstance = new User();
        $newInstance->id = $item->id;
        $newInstance->name = $item->name;
        $newInstance->email = $item->email;
        $newInstance->password = $item->password;
        $newInstance->profile = $item->profile;
        $newInstance->type = $item->type;
        if (IS_NULL($item->phone)) {
            $newInstance->phone='NULL';
        } else {
            $newInstance->phone = $item->phone;
        }

        if (IS_NULL($item->address)) {
            $newInstance->address='NULL';
        } else {
            $newInstance->address = $item->address;
        }

        if(IS_NULL($item->dob)) {
            $newInstance->dob='NULL';
        } else {
            $newInstance->dob =$item->dob;
        }

        $newInstance->created_user_id = $item->created_user_id;
        $newInstance->created_at = date('d/m/Y', strtotime($item->created_at));
        return $newInstance;
    }
}