<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CsvDownloadInput;
use Domain\Output\Bulletin\Post\CsvDownloadOutput;
use Domain\Usecase\Bulletin\Post\CsvDownloadUsecase;

class CsvDownloadInteractor implements CsvDownloadUsecase
{
    public function handle(CsvDownloadInput $input):CsvDownloadOutput
    {
        $output = new CsvDownloadOutput($input->search);

        return $output;
    }
}