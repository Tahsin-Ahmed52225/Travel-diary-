<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Interfaces\RegisterRepositoryInterface;

class RegisterController extends Controller
{
    private $registerRepositoryInterface;

    public function __construct(RegisterRepositoryInterface $registerRepositoryInterface)
    {
        $this->registerRepositoryInterface = $registerRepositoryInterface;
    }
    public function register(RegistrationRequest $request)
    {
            $status = $this->registerRepositoryInterface->register($request);

            return $status;
    }
}
