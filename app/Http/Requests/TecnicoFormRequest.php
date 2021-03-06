<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TecnicoFormRequest extends FormRequest
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



         'idpersona'=> 'required',
         'nombre'=>'max:100',
         'tipo_documento'=>'max:30',
         'num_documento'=>'max:15',
         'telefono'=>'max:15',
         'email'=>'max:50',
         'especializacion'=>'max:50',



        ];
    }
}
