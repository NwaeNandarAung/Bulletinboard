<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\CsvUploadScreenInput;
use Domain\Output\Bulletin\Post\CsvUploadScreenOutput;

interface CsvUploadScreenUsecase
{
    public function handle(CsvUploadScreenInput $input):CsvUploadScreenOutput;
}