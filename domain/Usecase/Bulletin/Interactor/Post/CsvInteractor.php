<?php
namespace Domain\Usecase\Bulletin\Interactor\Post;
use Domain\Output\Bulletin\Post\CsvOutput;
use Domain\Usecase\Bulletin\Post\CsvUsecase;
use Domain\Repository\Bulletin\Post\CsvRepository;

class CsvInteractor implements CsvUsecase
{
    private $csvRepository;

    public function __construct(CsvRepository $csvRepository)
    {
        $this->csvRepository = $csvRepository;
    }

    public function handle():CsvOutput
    {
        //$input->validate();
        $csvInfo=$this->csvRepository->csvInfo();
        $output = new CsvOutput($csvInfo);
        return $output;
    }
}