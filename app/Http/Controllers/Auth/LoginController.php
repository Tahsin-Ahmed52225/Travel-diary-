<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Enums\AuthErrorMessage;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Interfaces\LoginRepositoryInterface;
use Exception;

class LoginController extends Controller
{
    private $loginRepository;

    public function __construct(LoginRepositoryInterface $loginRepository)
    {
        $this->loginRepository = $loginRepository;
    }
    /**
     * Login API controller
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        try {
            $status = $this->loginRepository->login($request);
        } catch (Exception $e) {
            $status = response()->json(['msg' => AuthErrorMessage::LoginFailure ], 500);
        } finally {
            return $status;
        }
    }
     /**
     * Logout API controller
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request): JsonResponse
    {
        try {
            $status = $this->loginRepository->logout($request);
        } catch (Exception $e) {
            $status = response()->json(['msg' => AuthErrorMessage::LoginFailure ], 500);
        } finally {
            return $status;
        }
    }
}
