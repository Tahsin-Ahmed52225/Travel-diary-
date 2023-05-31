<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Enums\AuthErrorMessage;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\LoginRepositoryInterface;

class LoginRepository implements LoginRepositoryInterface
{
    /**
     * login API repository
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            return response()->json([
                        'msg' => AuthErrorMessage::LoginSuccess,
                        'Access-Token' => $token,
                    ], 200);
        } else {
            return response()->json(['msg' => AuthErrorMessage::LoginFailure ], 401);
        }
    }
    /**
     * logout API repository
     * @param Request $request
     * @return JsonResponse
     */
    public function logout(Request $request)
    {
        $user = Auth::user()->token();
        $user->revoke();
        $status = response()->json(['msg' => AuthErrorMessage::LogoutSuccess], 200);

        return $status;
    }
}

