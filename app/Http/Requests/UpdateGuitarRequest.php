<?php

namespace App\Http\Requests;

use App\Models\Guitar;
use App\Http\Resources\GuitarResource;
use Illuminate\Foundation\Http\FormRequest;

class UpdateGuitarRequest extends FormRequest
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
            'id'    => 'required|integer',
            'name'  => 'required|string',
            'type'  => 'required|string',
            'brand' => 'required|string',
            'date_bought'  => 'required|date',
        ];
    }

    public function update($id)
    { 
        $data = Guitar::findOrFail($id); 
        return new GuitarResource($data->update($this->validated()));    
    }
}
