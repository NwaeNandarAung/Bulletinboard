<?php
namespace Domain\Repository\Bulletin;

Interface GetLogoutRepository
{
    public function getLogoutInfo():? array;
}