<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CsvUploadActionInput;
use Domain\Output\Bulletin\Post\CsvUploadActionOutput;
use Domain\Usecase\Bulletin\Post\CsvUploadActionUsecase;

class CsvUploadActionInteractor implements CsvUploadActionUsecase
{
    public function handle(CsvUploadActionInput $input):CsvUploadActionOutput
    {
        $output = new CsvUploadActionOutput();

        return $output;
    }
}