<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\Jobs\CreateJobsRequest;
use App\Http\Requests\Jobs\UpdateJobsRequest;
use App\Models\Jobs;
use Illuminate\Http\Request;
use App\Models\User;

class JobController extends Controller
{
    /**
     * Display a listing of the jobs.
     */
    public function index()
    {
        $jobs = Jobs::all();
        return view('backend.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new job.
     */
    public function create()
    {
        return view('backend.jobs.create');
    }

    public function store(CreateJobsRequest $request)
    {
        try {
            // Retrieve validated data from the request
            $validated = $request->validated();

            // Assign the authenticated user's ID if not provided
            $validated['user_id'] = $validated['user_id'] ?? auth()->id();

            // Create a new job using the validated data
            Jobs::create($validated);
            dd($validated);
            // Redirect to the jobs index page with a success message
            // return redirect()->route('jobs.index')->with('success', 'Job created successfully.');
        } catch (\Exception $e) {
            // Log the error for debugging
            \Log::error('Job creation failed: ' . $e->getMessage());
            dd($validated);

            // Redirect back with an error message
            return back()->withErrors(['error' => 'Failed to create job. Please try again.']);
        }
    }

    /**
     * Display the specified job.
     */
    public function show($id)
    {
        $job = Jobs::findOrFail($id);
        return view('backend.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified job.
     */
    public function edit($id)
    {
        $job = Jobs::findOrFail($id);
        return view('backend.jobs.edit', compact('job'));
    }

    /**
     * Update the specified job in storage.
     */
    public function update(UpdateJobsRequest $request, $id)
    {
        $job = Jobs::findOrFail($id);
        $job->update($request->validated());
        return redirect()->route('jobs.index')->with('success', 'Job updated successfully.');
    }

    /**
     * Remove the specified job from storage.
     */
    public function destroy($id)
    {
        $job = Jobs::findOrFail($id);
        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}
