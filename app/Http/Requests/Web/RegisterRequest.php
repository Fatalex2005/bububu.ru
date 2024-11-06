<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    // Правило авторизации
    public function authorize(): bool {
        return true;
    }

    // Правила валидации данных
    public function rules(): array {
        return [
            'surname' => 'required|min:2|string|max:32',
            'name' => 'required|min:2|string|max:32',
            'patronymic' => 'nullable|min:2|string|max:32',
            'sex' => 'required|boolean',
            'birthday' => 'required|date',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|max:255|confirmed',
            'nickname' => 'required|string|min:2|max:32|unique:users',
            'avatar' => 'nullable|mimes:jpeg,png,jpg,svg|max:4096',
            'phone' => 'nullable|string|min:10|max:16|unique:users',
        ];
    }

    // Кастомные сообщения об ошибках валидации
    public function messages(): array {
        return [
            'surname.required' => 'Поле Фамилия обязательно для заполнения',
            'name.required' => 'Поле Имя обязательно для заполнения',
            'sex.required' => 'Поле Пол обязательно для заполнения',
            'birthday.required' => 'Поле Дата рождения обязательно для заполнения',
            'email.required' => 'Поле Электронная почта обязательно для заполнения',
            'password.required' => 'Поле Пароль обязательно для заполнения',
            'nickname.required' => 'Поле Никнейм обязательно для заполнения',

            'surname.min' => 'Поле Фамилия должно содержать минимум 2 символа',
            'surname.max' => 'Поле Фамилия должно содержать максимум 32 символа',
            'name.min' => 'Поле Имя должно содержать минимум 2 символа',
            'name.max' => 'Поле Имя должно содержать максимум 32 символа',
            'patronymic.min' => 'Поле Отчество должно содержать минимум 2 символа',
            'patronymic.max' => 'Поле Отчество должно содержать максимум 32 символа',
            'password.min' => 'Поле Пароль должно содержать минимум 6 символов',
            'password.max' => 'Поле Пароль должно содержать максимум 255 символов',
            'nickname.min' => 'Поле Никнейм должно содержать минимум 2 символа',
            'nickname.max' => 'Поле Никнейм должно содержать максимум 32 символа',
            'phone.min' => 'Поле Номер телефона должно содержать минимум 10 символов',
            'phone.max' => 'Поле Номер телефона должно содержать максимум 16 символов',

            'avatar.max' => 'Файл Аватара не должен превышать 4 МБ',
            'email.max' => 'Поле Электронная почта должно содержать максимум 255 символов',

            'sex.boolean' => 'Пол должен содержать значение 0 или 1',

            'birthday.date' => 'Дата рождения должна быть в формате YYYY-MM-DD',

            'email.email' => 'Электронная почта должна быть в правильном формате электронного адреса',

            'email.unique' => 'Данная Электронная почта уже используется другим пользователем',
            'nickname.unique' => 'Данная Никнейм уже используется другим пользователем',
            'phone.unique' => 'Данный Номер телефона уже используется другим пользователем',

            'avatar.mimes' => 'Файл Аватара должен быть формата jpeg, png, jpg, svg',

            'password.confirmed' => 'Пароли не совпадают',
        ];
    }
}
