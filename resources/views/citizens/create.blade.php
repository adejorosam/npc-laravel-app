
@extends('layouts.app')
@section('title', 'Create citizen')
@section('content')
    <h1>Citizens Page</h1>

    <form action="{{ route('citizen.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="gender">Gender</label>
            <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>

        <div>
            <label for="name">Address</label>
            <input type="text" name="address" required>
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="tel" name="phone" required>
        </div>

        
        <div>
            <label for="ward">Ward</label>
            <select name="ward" required>
                @foreach($wards as $ward)
                <option value="{{$ward->id}}">{{$ward->name}}</option>
                @endforeach
            </select>
        </div>

        

        <button>Submit</button>
    </form>
    @endsection
