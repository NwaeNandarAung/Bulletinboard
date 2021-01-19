<?php
namespace Domain\Usecase\Bulletin;
use Domain\Output\Bulletin\EditPostOutput;

interface EditPostUsecase{
    public function handle():EditPostOutput;
}