<?php
namespace Domain\Repository\Bulletin\User;

Interface ConfirmUserRepository
{
    public function getConfirmUserInfo():? array;
}