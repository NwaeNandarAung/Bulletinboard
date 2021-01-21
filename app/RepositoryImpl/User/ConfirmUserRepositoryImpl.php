<?php
namespace App\RepositoryImpl\User;
use Domain\Repository\Bulletin\User\ConfirmUserRepository;
use DB;
use Domain\Models\User;

class ConfirmUserRepositoryImpl implements ConfirmUserRepository
{
    public function getConfirmUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }
}