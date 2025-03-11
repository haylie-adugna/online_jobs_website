@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Job</h2>
    <form action="{{ route('jobs.update', $job->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Job Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $job->title) }}">
            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="description">Job Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $job->description) }}</textarea>
            @error('description') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" id="location" class="form-control" value="{{ old('location', $job->location) }}">
            @error('location') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" class="form-control" value="{{ old('company_name', $job->company_name) }}">
            @error('company_name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" name="salary" id="salary" class="form-control" value="{{ old('salary', $job->salary) }}">
            @error('salary') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="type">Job Type</label>
            <select name="type" id="type" class="form-control">
                <option value="full-time" {{ $job->type == 'full-time' ? 'selected' : '' }}>Full-time</option>
                <option value="part-time" {{ $job->type == 'part-time' ? 'selected' : '' }}>Part-time</option>
                <option value="freelance" {{ $job->type == 'freelance' ? 'selected' : '' }}>Freelance</option>
                <option value="contract" {{ $job->type == 'contract' ? 'selected' : '' }}>Contract</option>
            </select>
            @error('type') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="form-group">
            <label for="contact_email">Contact Email</label>
            <input type="email" name="contact_email" id="contact_email" class="form-control" value="{{ old('contact_email', $job->contact_email) }}">
            @error('contact_email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button type="submit" class="btn btn-success">Update Job</button>
    </form>
</div>
@endsection
