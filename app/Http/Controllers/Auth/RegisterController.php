<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
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
        try {
            $status = $this->registerRepositoryInterface->register($request);
        } catch (Exception $e) {
            $status = response()->json(['token' => $e->getMessage()], 500);
        } finally {
            return $status;
        }
    }
}
