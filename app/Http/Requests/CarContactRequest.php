<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'message' => ['required', 'string', 'min:5'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Ім’я» обов’язкове для заповнення.',
            'email.required' => 'Поле «Email» не може бути порожнім.',
            'email.email' => 'Введіть коректну електронну адресу (наприклад, test@gmail.com).',
            'message.required' => 'Будь ласка, введіть текст повідомлення.',
            'message.min' => 'Повідомлення має містити щонайменше 5 символів.',
        ];
    }
}
