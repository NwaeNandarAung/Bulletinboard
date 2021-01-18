<?php
namespace App\RepositoryImpl;
use Domain\Repository\Bulletin\LoginRepository;
use DB;
use Domain\Models\User;

class LoginRepositoryImpl implements LoginRepository
{
    public function getLoginInfo($input): ?array
    {
        $query=DB::table('users');
        $query->where('email','=', $input->email);

        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }
}