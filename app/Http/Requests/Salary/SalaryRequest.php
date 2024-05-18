<?php

namespace App\Http\Requests\Salary;

use Illuminate\Foundation\Http\FormRequest;

class SalaryRequest extends FormRequest
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
            'basic_salary' => 'required|numeric|min:10000',
            'allowances_description' => 'required|string',
            'allowances_amount' => 'required|numeric|min:0',
            'deductions_description' => 'required|string',
            'deductions_amount' => 'required|numeric|min:0',
        ];
    }
}
