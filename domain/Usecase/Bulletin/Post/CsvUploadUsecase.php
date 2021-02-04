<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Input\Bulletin\Post\CsvUploadInput;
use Domain\Output\Bulletin\Post\CsvUploadOutput;

interface CsvUploadUsecase
{
    public function handle(CsvUploadInput $input):CsvUploadOutput;
}