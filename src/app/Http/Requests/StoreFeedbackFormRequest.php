<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackFormRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'full_name' => 'required|string|min:6|max:70',
            'email' => 'required|email|string|max:70',
            'address' => 'required|string|max:255',
            'phone' => 'nullable|string|regex:/^([0-9\s\-\+\(\)]*)$/|max:20',
            'request' => 'required|string|min:10|max:2500',
            'comment' => 'nullable|string|max:2500',
            'wish' => 'nullable|string|max:1000'
        ];
    }

    public function attributes() {
        return [
            'full_name' => 'ФИО',
            'email' => 'Адрес электронной почты',
            'address' => 'Ваш адрес',
            'phone' => 'Номер телефона',
            'request' => 'Запрос',
            'comment' => 'Комментарии',
            'wish' => 'Пожелания'
        ];
    }
}
