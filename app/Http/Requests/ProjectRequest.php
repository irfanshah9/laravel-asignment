<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'p_name'    => 'required|max:120',
			'p_type'    => 'required',
			 'serives'    => 'required',
			  'p_comment'    => 'required',
			   'p_term'    => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages() {
        return [
            'p_name.required' => 'Please Enter Project Name!',
			 'p_type.required' => 'Please Select Project Type!',
			  'serives.required' => 'Please Choose Atleast One!',
            'p_name.max' => 'Only 120 Characters Are Allowed!',
            'p_comment.required' => 'Comment Is Required!',
			'p_term.required' => 'Please Agree This!',
        ];
    }

}
