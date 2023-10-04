<?php

namespace App\Interfaces;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

interface LoginRepositoryInterface
{
    public function login(LoginRequest $request);
    public function logout(Request $request);
}
