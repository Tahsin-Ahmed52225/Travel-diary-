<?php

namespace App\Http\Requests;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ];
    }
    /**
     * custom response format for faild validation
     *
     */
    protected function failedValidation(Validator $validator): void
    {
        $response = new JsonResponse(['message' => $validator->errors() ,
                                      'data' => [] ,
                                     ], Response::HTTP_BAD_REQUEST);

        throw new ValidationException($validator, $response);
    }
}
