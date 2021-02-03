<?php

namespace Domain\Usecase\Bulletin\Post;

use Domain\Output\Bulletin\Post\CsvDownloadOutput;
use Domain\Input\Bulletin\Post\CsvDownloadInput;

interface CsvDownloadUsecase
{
    public function handle(CsvDownloadInput $input):CsvDownloadOutput;
}