<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Interfaces\LoginRepositoryInterface;

class LoginController extends Controller
{
    private $loginRepository;

    public function __construct(LoginRepositoryInterface $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }
    /**
     * Login API controller
     */
    public function login(LoginRequest $request): JsonResponse
    {
            $response = $this->loginRepository->login($request);

            return $response;
    }
     /**
     * Logout API controller
     */
    public function logout(Request $request): JsonResponse
    {
            $status = $this->loginRepository->logout($request);

            return $status;
    }
}
