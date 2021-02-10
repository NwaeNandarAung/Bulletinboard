<?php

namespace Domain\Usecase\Bulletin\Interactor\User;

use Domain\Input\Bulletin\User\SearchUserInput;
use Domain\Output\Bulletin\User\SearchUserOutput;
use Domain\Usecase\Bulletin\User\SearchUserUsecase;
use Domain\Repository\Bulletin\User\UserRepository;

class SearchUserInteractor implements SearchUserUsecase
{
    public $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function handle(SearchUserInput $input):SearchUserOutput
    {
        $input->validate();

        if ($this->userRepository->searchByName($input->name)) {
            $userInfo = $this->userRepository->searchByName($input->name);
        } elseif ($this->userRepository->searchByEmail($input->email)) {
            $userInfo = $this->userRepository->searchByEmail($input->email);
        } elseif ($this->userRepository->searchByCreatedFrom($input->created_from)) {
            $userInfo = $this->userRepository->searchByCreatedFrom($input->created_from);
        } elseif ($this->userRepository->searchByCreatedTo($input->created_to)) {
            $userInfo = $this->userRepository->searchByCreatedTo($input->created_to);
        }

        $output = new SearchUserOutput($userInfo);

        return $output;
    }
}