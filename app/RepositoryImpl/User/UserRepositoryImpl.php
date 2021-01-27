<?php

namespace App\RepositoryImpl\User;

use Domain\Repository\Bulletin\User\UserRepository;
use DB;
use Domain\Models\User;
use Auth;

class UserRepositoryImpl implements UserRepository
{
    public function getAllUsersInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function createUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getConfirmUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function editUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getUpdateConfirmUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getUpdateUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function showUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->where('id','=', Auth::id());
              
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function detailUserInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
       
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function editPasswordInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getUpdatePasswordInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
      
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getLoginInfo($input): ?array
    {
        $query = DB::table('users');
        $query->where('email','=', $input->email);

        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getLogoutInfo(): ?array
    {
        $query = DB::table('users');
        $query->select('name','email','password','profile','type','phone','address','dob','created_user_id','updated_user_id','created_at','updated_at');
        
        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }
}