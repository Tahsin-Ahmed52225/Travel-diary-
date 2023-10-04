<?php

namespace App\Interfaces;

use App\Http\Requests\RegistrationRequest;

interface RegisterRepositoryInterface
{
    public function register(RegistrationRequest $request);
}
