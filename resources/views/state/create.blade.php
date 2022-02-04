@extends('layouts.app')
@section('title', 'Create LGA')
@section('content')
    <h1>Create A New State</h1>
    
    <form action="{{ route('state.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Please Enter State Name" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button>Submit</button>
    </form>
@endsection