<?php
namespace Domain\Usecase\Bulletin;
use Domain\Output\Bulletin\GetLogoutOutput;

interface GetLogoutUsecase{
    public function handle():GetLogoutOutput;
}