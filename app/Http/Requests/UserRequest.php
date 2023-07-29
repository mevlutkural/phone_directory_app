<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $userId = $this->get('user_id') ?? 0;

        return [
            'email'    => 'required|sometimes|email|unique:App\Models\User,email,' . $userId,
            'password' => 'required|sometimes|string|min:5|confirmed',
        ];
    }

    public function messages()
    {
        return [
            'email.required'     => 'E-Posta alanı gereklidir.',
            'email.email'        => 'E-Posta doğru formatta değil.',
            'password.required'  => 'Şifre alanı gereklidir.',
            'password.string'    => 'Şifre alanı gereklidir.',
            'password.min'       => 'Şifre alanı minimum 5 karakter olmalıdır.',
            'password.confirmed' => 'Girilen şifreler eşleşmiyor.',
        ];
    }

    protected function passedValidation()
    {
        if ($this->request->has("password")) {
            $password = $this->request->get("password");
            $this->request->set("password", Hash::make($password));
        }
    }
}
