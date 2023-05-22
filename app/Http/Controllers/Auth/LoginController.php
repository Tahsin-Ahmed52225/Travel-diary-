<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
     * Handle the incoming request.
     */
    public function login(Request $request)
    {
        try {
            $status = $this->loginRepository->login($request);
        } catch (Exception $e) {
            $status = response()->json(['token' => $e->getMessage()], 500);
        } finally {
            return $status;
        }


    }
}
