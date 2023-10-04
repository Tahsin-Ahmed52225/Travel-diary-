<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Response;
use App\Enums\AuthErrorMessage;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\RegistrationRequest;
use App\Interfaces\RegisterRepositoryInterface;

class RegisterRepository implements RegisterRepositoryInterface {
    /**
     * Register a new user
     */
    public function register(RegistrationRequest $request): JsonResponse
    {
        $user = User::store($request);

        return response()->json(['message' => AuthErrorMessage::RegistrationSuccess ,
                                 'data' => [
                                    'token' => $user->createToken('LaravelAuthApp')->accessToken ,
                                    ]
                                 ], Response::HTTP_CREATED);
    }

}

