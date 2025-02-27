<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CreateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
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
            // 'name' => 'required|string',
            // 'branch' => 'required',
            // 'address' => 'nullable',
            // 'date' => 'nullable',
            // 'file' => 'required',
            // 'contact' => 'required',
            // 'status' => 'nullable',
            // 'user_id' => 'nullable',
            // 'notes' => 'nullable',



        //  it is just for testing
            'name' => 'nullable|string',
            'branch' => 'nullable',
            'address' => 'nullable',
            'date' => 'nullable',
            'file' => 'nullable',
            'contact' => 'nullable',
            'status' => 'nullable',
            'user_id' => 'nullable',
            'notes' => 'nullable',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        // Custom response or throw an exception
        throw new HttpResponseException(response()->json([
            'message' => 'Validation failed',
            'errors' => $validator->errors(),
        ], 422));
    }
}
