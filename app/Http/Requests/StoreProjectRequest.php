<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|unique:projects|max:150|min:3',
            'workflow_id' => 'required|exists:types,id',
            'description' => 'nullable',
            'dev_lang' => 'required|max:255',
            'framework' => 'nullable',
            'team' => 'nullable',
            'git_link' => 'nullable',
            'diff_lvl' => 'nullable',
            'cover_image' => 'nullable|image|max: 1000'
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Il titolo è obbligatorio.',
            'name.min' => 'Il titolo deve essere lungo almeno :min caratteri.',
            'name.max' => 'Il titolo non può superare i :max caratteri.',
            'name.unique:projects' => 'Il titolo esiste già',
            'dev_lang.required'=> 'il paramentro è obbligatorio',
            'workflow_id.required' => 'il paramentro è obbligatorio'
        ];
    }
}