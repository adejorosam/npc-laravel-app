@extends('layouts.app')
@section('title', 'Create LGA')
@section('content')
    <h1>LGA Page</h1>

    <form action="{{ route('lga.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="state">State</label>
            <select name="state" required>
                @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
                @endforeach
            </select>
        </div>

        

        <button>Submit</button>
    </form>
@endsection