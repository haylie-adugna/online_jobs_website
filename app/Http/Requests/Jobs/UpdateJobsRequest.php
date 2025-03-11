<?php

namespace App\Http\Requests\Jobs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobsRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Change based on your authorization logic
    }

    public function rules()
    {
        return [
            'user_id' => 'sometimes|exists:users,id',
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'company' => 'sometimes|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'sometimes|in:full-time,part-time,contract,internship',
            'salary' => 'nullable|numeric',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
        ];
    }
}
