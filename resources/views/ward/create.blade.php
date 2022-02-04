@extends('layouts.app')
@section('title', 'Create ward')
@section('content')
    <h1>Create A New Ward</h1>

    <form action="{{ route('ward.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label for="lga">LGA</label>
            <select name="lga" required>
                @foreach($lgas as $lga)
                <option value="{{$lga->id}}">{{$lga->name}}</option>
                @endforeach
            </select>
        </div>

        

        <button>Submit</button>
    </form>
</body>
@endsection