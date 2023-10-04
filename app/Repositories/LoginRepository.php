<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Enums\AuthErrorMessage;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\LoginRepositoryInterface;

class LoginRepository implements LoginRepositoryInterface
{
    /**
     * login API repository
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (auth()->attempt($data)) {
            return response()->json([
                'message' => AuthErrorMessage::LoginSuccess,
                'data' => [
                    'token' => auth()->user()->createToken('LaravelAuthApp')->accessToken,
                ],
            ], Response::HTTP_OK);
        } else {
            return response()->json([
                'message' => AuthErrorMessage::LoginFailure ,
                'data' => []
            ], Response::HTTP_UNAUTHORIZED);
        }
    }
    /**
     * logout API repository
     */
    public function logout(Request $request): JsonResponse
    {
        $user = Auth::user()->token();
        $user->revoke();
        $status = response()->json([
            'message' => AuthErrorMessage::LogoutSuccess ,
            'data' => [] ,
        ], Response::HTTP_OK);

        return $status;
    }
}

