@extends('layouts.app')  // Assuming you have a layout file

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information') }}</div>

                <div class="card-body">
                    <div>

                    <img class="" style="height: 250px; width: 200px;"
                                        src="{{ asset('upload/user/image') }}/{{ $user->photo }}" alt="User photo">

                    <div>
                        <strong>Name:</strong> {{ $user->first_name }} {{$user->last_name}}
                    </div>
                    <div>
                        <strong>Email:</strong> {{ $user->email }}
                    </div>
                    <div>
                        @foreach($user->roles as $key => $roles)
                                <span class="label label-info">{{ $roles->title }}</span>
                            @endforeach
                    </div>
                    <div>
                        <strong>Age:</strong> {{ $user->age }}
                    </div>
                    <div>
                        <strong>Gender:</strong> {{ $user->gender }}
                    </div>
                    <!-- Add more fields as needed -->

                    {{-- You can also check if a field is not null before displaying it --}}
                    @if ($user->address)
                        <div>
                            <strong>Address:</strong> {{ $user->address }}
                        </div>
                    @endif

                    {{-- Displaying an image if the 'photo' field is not null --}}

                    @if ($user->assigned_game)
                        <div>
                            <strong>Assigned Game:</strong>
                            <a href="#">{{ $user->assigned_game }}</a>
                        </div>
                    @endif

                    {{-- Add more fields and customize as needed --}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.users.index') }}" class="btn btn-primary">Back to Matches</a>
        </div>
    </div>
</div>
@endsection
