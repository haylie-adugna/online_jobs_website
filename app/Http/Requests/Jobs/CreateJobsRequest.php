<?php

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class CreateJobsRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Change to false and add custom logic if needed for authorization.
    }

    public function rules()
    {
        return [
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'company' => 'required|string|max:255', // Ensure this matches the form field name.
            'location' => 'nullable|string|max:255',
            'type' => 'required|in:full-time,part-time,contract,internship',
            'salary' => 'nullable|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ];
    }
}
