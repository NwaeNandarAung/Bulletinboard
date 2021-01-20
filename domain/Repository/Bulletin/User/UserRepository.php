<?php
namespace Domain\Repository\Bulletin\User;

Interface UserRepository
{
    public function getUserInfo():? array;
}