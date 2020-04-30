<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class HomeRequest extends FormRequest
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
            'name'=>'required|min:3|max:25',
            'message'=>'required|min:15|max:500',
            'date'=>'required|date|after:tomorrow',
            'email'=>'required|email'
        ];
    }

    public function messages()
    {
        //return parent::messages(); // TODO: Change the autogenerated stub
        return [
            'name.required'=>'Name майдони тўлидирилиши шарт!!!',
            'name.min'=>'Name майдони минимал қиймати 3 та белги!!!',
            'name.max'=>'Name майдони учун максимал қиймат 25 белги!!!',
            'message.required'=>'Хабар майдони тўлдирилиши шарт!!!'

        ];
    }

    public function attributes()
    {
        return [
            'date'=>'date of birth'
        ];//parent::attributes(); // TODO: Change the autogenerated stub
    }
}