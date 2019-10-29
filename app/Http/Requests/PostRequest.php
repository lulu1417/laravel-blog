<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class PostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    { // 必須登入才能使用這個request
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    { //資料欄位格式
        return [
            'title' => 'required|string',
            'type' => 'required|integer|exists:post_types,id',
            'content'=>'required|string'
        ];
    }
}
