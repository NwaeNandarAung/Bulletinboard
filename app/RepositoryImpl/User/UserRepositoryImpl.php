<?php

namespace App\RepositoryImpl\User;

use Domain\Repository\Bulletin\User\UserRepository;
use DB;
use Domain\Models\User;
use Auth;
use Hash;

class UserRepositoryImpl implements UserRepository
{
    public function getAllUsersInfo($input): ?array
    {
        $query = DB::table('users');
        $query->select();

        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function createUserInfo($input): ?User
    {
        $query = DB::table('users');
        $query->insertGetId([
            'name' => $input->name,
            'email' => $input->email,
            'password' => Hash::make($input->password),
            'type' => $input->type,
            'phone' => $input->phone,
            'dob' => $input->dob,
            'address' => $input->address,
            'profile' => $input->profile,
            'created_user_id' => Auth::id(),
            'updated_user_id' => Auth::id(),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return User::createInstance($query->latest()->first());
    }

    public function getUserInfoByEmail($email): ?array
    {
        $query = DB::table('users');
        $query->where('email', '=', $email);

        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }

    public function getUpdateUserInfo($input): ?array
    {
        $updateDetails = [
            'name' => $input->name,
            'type' => $input->type,
            'phone'=> $input->phone,
            'dob' => $input->dob,
            'address' => $input->address,
            'profile' => $input->profile,
            'updated_user_id' => Auth::id(),
            'updated_at' => now()
        ];

        $query = DB::table('users');
        $query->where('id', '=', Auth::id())
              ->update($updateDetails);

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
        $query->select();

        return $query->get()->map(function ($item) {
            return User::createInstance($item);
        })->toArray();
    }
}