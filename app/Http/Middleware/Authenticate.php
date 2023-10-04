<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Enums\AuthErrorMessage;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : abort(response()->json(['message' => AuthErrorMessage::UnAuthorized , "data" => [] ], Response::HTTP_FORBIDDEN ));
    }
}
