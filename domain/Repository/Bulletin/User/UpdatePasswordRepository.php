<?php
namespace Domain\Repository\Bulletin\User;

Interface UpdatePasswordRepository
{
    public function getUpdatePasswordInfo():? array;
}