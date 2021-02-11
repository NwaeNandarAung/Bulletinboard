<?php

namespace Domain\Repository\Bulletin\User;

use Domain\Models\User;

Interface UserRepository
{
    public function getAllUsersInfo($input);

    public function getUserInfoByEmail($email) :?array;

    public function createUserInfo($input) :?User;

    public function searchbyName($name);

    public function searchbyEmail($email);

    public function searchbyCreatedFrom($created_from);

    public function searchbyCreatedTo($created_to);

    public function deleteUserInfo($userId): ?array;

    public function showUserInfo() :?array;

    public function getUpdateUserInfo($input) :?array;

    public function getUpdatePasswordInfo($newPassword) :?array;

    public function getLoginInfo($input) :?array;

    public function getLogoutInfo() :?array;
}