<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\CsvUploadActionInput;
use Domain\Output\Bulletin\Post\CsvUploadActionOutput;

interface CsvUploadActionUsecase
{
    public function handle(CsvUploadActionInput $input):CsvUploadActionOutput;
}