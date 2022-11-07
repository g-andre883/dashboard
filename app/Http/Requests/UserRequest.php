<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        // dd($this->id);
        return [
            'family_name'=>'required|max:10',
            'family_name_hiragana'=>'required|max:20',
            'personal_name'=>'required|max:10',
            'personal_name_hiragana'=>'required|max:20',
            'login_id'=>'required|unique:users,login_id,'. $this->id . ',id|max:20',
            'password'=>'required|regex:/^[0-9]{4}-[0-9]{2}$/',
            // 'password_confirm'=>'required|regex:/^[0-9]{4}-[0-9]{8}$/',
            'email'=>'required|unique:users,email,'. $this->id . ',id',
        ];
    }
}
