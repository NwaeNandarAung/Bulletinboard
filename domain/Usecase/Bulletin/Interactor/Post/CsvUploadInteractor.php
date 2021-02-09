<?php

namespace Domain\Usecase\Bulletin\Interactor\Post;

use Domain\Input\Bulletin\Post\CsvUploadInput;
use Domain\Output\Bulletin\Post\CsvUploadOutput;
use Domain\Usecase\Bulletin\Post\CsvUploadUsecase;
use Domain\Repository\Bulletin\Post\PostRepository;
use Domain\Exceptions\BulletinWebException;
use Domain\ValueObject\Common\ErrorCode;
use Auth;

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

        $filename = $input->file->getClientOriginalName();
        // File upload location
        $location = Auth::id().'/csv';

        // Upload file
        $input->file->move($location,$filename);

        // Import CSV to Database
        $filepath = public_path($location."/".$filename);

        // Reading file
        $input->file = fopen($filepath,"r");

        $importData_arr = array();
        $i = 0;
        while (($filedata = fgetcsv($input->file, 1000, ",")) !== FALSE) {
            $num = count($filedata );
            for ($c=0; $c < $num; $c++) {
                $importData_arr[$i][] = $filedata [$c];
            }
            $i++;
        }
        fclose($input->file);

        $postTitleInfo = $this->postRepository->csvImportInfo($importData_arr);
        foreach ($importData_arr as $importData) {
            if (empty($importData[0])) {
                throw new BulletinWebException(ErrorCode::ERROR_0002, "Title is required");
            }
            if (empty($importData[1])) {
                throw new BulletinWebException(ErrorCode::ERROR_0002, "Description is required");
            }
        }

        if (!empty($postTitleInfo)) {
            throw new BulletinWebException(ErrorCode::ERROR_0002, "Post Already Existed");
        } else {
            $postInfo = $this->postRepository->csvUploadInfo($importData_arr);
        }
        $output = new CsvUploadOutput($input);

        return $output;
    }
}