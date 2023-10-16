<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreproductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','string'],
            'category_id' => ['required', 'string']
        ];
    }
}
