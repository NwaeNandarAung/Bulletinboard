<?php

namespace Domain\Repository\Bulletin\User;

Interface UserRepository
{
    public function getAllUsersInfo($input) :?array;

    public function createUserInfo($input) :?array;

    public function getUserInfoByEmail($email) :?array;

    public function getUserInfo() :?array;

    public function editUserInfo() :?array;

    public function getUpdateConfirmUserInfo() :?array;

    public function getUpdateUserInfo() :?array;

    public function showUserInfo() :?array;

    public function detailUserInfo() :?array;

    public function editPasswordInfo() :?array;

    public function getUpdatePasswordInfo() :?array;

    public function getLoginInfo($input) :?array;

    public function getLogoutInfo() :?array;
}