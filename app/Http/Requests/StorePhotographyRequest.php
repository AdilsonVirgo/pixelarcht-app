<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePhotographyRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',

            'photo' => 'required|image',

            'category_id' => 'required'
        ];
    }
    // 'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
    //'file' => 'max:5120'
    //'your_file_input' => 'required|file|size:5000',
}
