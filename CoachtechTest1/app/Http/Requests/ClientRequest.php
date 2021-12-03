<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name__family' => 'required',
            'name__last' => 'required',
            'email' => 'required|email',
            'postcode' => 'required|min:8|max:8|regex:/^[0-9-]+$/',
            'address' => 'required',
            'opinion' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'name__family.required' => '入力してください。',
            'name__last.required' => '入力してください。',
            'email.required' => '入力してください。',
            'email.email' => '正しく入力してください。',
            'postcode.required' => '入力してください。',
            'postcode.min'=> '正しく入力してください。',
            'postcode.max'=> '正しく入力してください。',
            'postcode.regex'=> '正しく入力してください。（ハイフンは半角でお願いいたします。）',
            'address.required' => '入力してください。',
            'opinion.required' => '入力してください。',
            'opinion.max' => '文字数が多いです。'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'as')]);
    }

}