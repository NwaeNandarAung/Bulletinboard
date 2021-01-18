<?php
namespace Domain\Repository\Bulletin;

Interface LoginRepository
{
    public function getLoginInfo($input):? array;
}