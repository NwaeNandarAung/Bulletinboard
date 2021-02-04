<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\CsvImportInput;
use Domain\Output\Bulletin\Post\CsvImportOutput;

interface CsvImportUsecase
{
    public function handle(CsvImportInput $input):CsvImportOutput;
}