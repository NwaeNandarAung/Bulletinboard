<?php
namespace Domain\Usecase\Bulletin\Post;
use Domain\Output\Bulletin\Post\CsvOutput;

interface CsvUsecase{
    public function handle():CsvOutput;
}