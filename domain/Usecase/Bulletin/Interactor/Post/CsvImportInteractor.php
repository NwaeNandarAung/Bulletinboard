<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CsvImportInput;
use Domain\Output\Bulletin\Post\CsvImportOutput;
use Domain\Usecase\Bulletin\Post\CsvImportUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;

class CsvImportInteractor implements CsvImportUsecase
{
    public function handle(CsvImportInput $input):CsvImportOutput
    {
        $output = new CsvImportOutput();
 
        return $output;
    }
}