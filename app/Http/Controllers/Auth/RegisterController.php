<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\RegisterRepositoryInterface;

class RegisterController extends Controller
{
    private $registerRepositoryInterface;

    public function __construct(RegisterRepositoryInterface $registerRepositoryInterface)
    {
        $this->registerRepositoryInterface = $registerRepositoryInterface;
    }
    public function register(Request $request)
    {
        
        $status = $this->registerRepositoryInterface->register($request);
        return $status;
    }
}
