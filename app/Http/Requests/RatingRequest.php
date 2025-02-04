<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RatingRequest extends FormRequest
{
    public function rules() {
        return [
            'movies_id' => 'required|exists:movies,id',
            'review_text' => 'nullable|string|max:1000',
        ];
    }

    public function messages() {
        return [
            'movies_id.exists' => 'Указанный фильм не найден.',
            'review_text.string' => 'Отзыв должен быть строкой.',
            'review_text.max' => 'Отзыв не должен превышать :max символов.',
        ];
    }
}
