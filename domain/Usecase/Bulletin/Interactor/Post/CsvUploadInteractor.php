<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CsvUploadInput;
use Domain\Output\Bulletin\Post\CsvUploadOutput;
use Domain\Usecase\Bulletin\Post\CsvUploadUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;

class CsvUploadInteractor implements CsvUploadUsecase
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function handle(CsvUploadInput $input):CsvUploadOutput
    {
        $input->validate();

        $postTitleInfo = $this->postRepository->csvImportInfo($input->file);

        if (!empty($postTitleInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Post Already Existed");
        } else {
            $postInfo = $this->postRepository->csvUploadInfo($input->file);
        }
        $output = new CsvUploadOutput($input);

        return $output;
    }
}