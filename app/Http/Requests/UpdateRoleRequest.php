<?php

namespace App\Http\Requests;

use App\Models\Role;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Gate::allows('role_edit');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
     {
         return [
             'name'  => 'string|required',
             'permissions.*' => [
                 'integer',
             ],
             'permissions'   => [
                 'array',
             ],
             'color' => 'required',
             'prefix' => 'required|max:2'
         ];
     }

     public function attributes()
     {
         return [
             'name'  => 'nazwa',
         ];
     }
}
