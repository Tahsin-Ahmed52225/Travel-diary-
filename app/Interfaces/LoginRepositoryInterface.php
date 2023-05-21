<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface LoginRepositoryInterface
{
    public function login(Request $request);
}
