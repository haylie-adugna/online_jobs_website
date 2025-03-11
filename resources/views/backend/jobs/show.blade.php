@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $job->title }}</h2>
    <p><strong>Description:</strong> {{ $job->description }}</p>
    <p><strong>Location:</strong> {{ $job->location }}</p>
    <p><strong>Company Name:</strong> {{ $job->company_name }}</p>
    <p><strong>Salary:</strong> {{ $job->salary ?? 'Not specified' }}</p>
    <p><strong>Type:</strong> {{ ucfirst($job->type) }}</p>
    <p><strong>Contact Email:</strong> {{ $job->contact_email }}</p>
    <a href="{{ route('jobs.index') }}" class="btn btn-primary">Back to Jobs</a>
</div>
@endsection
