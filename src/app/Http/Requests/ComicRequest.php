<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comic_name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages() {
        return [
            'comic_name.required'  => ' ※コミック名は必須項目です',
            'image.image'  => ' ※画像ファイルを選択してください',
        ];
    }
}
