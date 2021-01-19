<?php
namespace Domain\Repository\Bulletin;

Interface ConfirmPostRepository
{
    public function getConfirmPostInfo():? array;
}