<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\GetLogoutRepository;
use DB;
use Domain\Models\User;

class GetLogoutRepositoryImpl implements GetLogoutRepository
{
    public function getLogoutInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }
}