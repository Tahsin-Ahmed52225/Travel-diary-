<?php

namespace App\Enums;

enum AuthErrorMessage: string
{
    case LoginSuccess = 'login successful';
    case LoginFailure = 'login failed';
    case LogoutSuccess = 'user logged out';
    case LogoutFailure = 'logout failed';
    case RegistrationSuccess = 'registration successful';
    case RegistrationFailure = 'registration failed';
    case UnAuthorized = 'unauthorized route';
}
