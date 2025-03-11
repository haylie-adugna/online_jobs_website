@extends('layouts.app')

@section('content')
<div class="container">
    <h2>All Jobs</h2>
    <a href="{{ route('jobs.create') }}" class="btn btn-primary mb-3">Create New Job</a>

    @if($jobs->isEmpty())
        <p>No jobs available.</p>
    @else
        <div class="row">
            @foreach($jobs as $job)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $job->title }}</h5>
                            <p class="card-text"><strong>Location:</strong> {{ $job->location }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ ucfirst($job->type) }}</p>
                            <p class="card-text"><strong>Company:</strong> {{ $job->company_name }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
