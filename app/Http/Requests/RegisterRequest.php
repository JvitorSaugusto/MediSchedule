<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'string', 'min:6', 'max:12,'],
        ];
    }

    public function messages(): array
    {
        return [
            // Mensagens do Nome
            'name.required'     => 'O campo nome é obrigatório.',
            'name.string'       => 'O nome deve ser um texto válido.',

            // Mensagens do E-mail
            'email.required'    => 'O campo e-mail é obrigatório.',
            'email.unique'      => 'Este e-mail já está cadastrado em nosso sistema. Tente fazer login.',
            'email.email'       => 'Forneça um endereço de e-mail válido.',

            // Mensagens da Senha
            'password.required' => 'O campo senha é obrigatório.',
            'password.string'   => 'A senha deve ser um texto válido.',
            'password.min'      => 'A senha deve ter no mínimo 6 caracteres.',
            'password.max'      => 'A senha não pode ter mais que 12 caracteres.',
        ];
    }
}
