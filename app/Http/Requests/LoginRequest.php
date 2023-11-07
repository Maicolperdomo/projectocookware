<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nickname' => 'required',
            'password' => 'required',
        ];
    }

    public function getCredentials(){
        $nickname = $this->get('nickname');

        if($this->isEmail($nickname)){
            return [
                'email' => $nickname,
                'password' => $this->get('password')
            ];
        }
        return $this->only('nickname', 'password');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['nickname' => $value], ['nickname' => 'email'])->fails();
    }
}
