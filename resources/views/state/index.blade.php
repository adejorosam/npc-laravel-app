
@extends('layouts.app')
@section('title', 'Available States')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">States</h5>
                    </div>
                    <h1>All States</h1>
                    <h2><strong>Number Of State: </strong> {{count($states)}}</h2>

                    <a href="{{route('state.create')}}">Create A New State</a>
                    <div class="card-body">
                        <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>
                                            ID
                                        </th>
                                       
                                        <th>
                                            Name
                                        </th>

                                        <th>
                                            Number of LGAs
                                        </th>

                                        <th>
                                            Number of citizens
                                        </th>
                                        
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($states as $state)
                                        <tr>
                                            <td>
                                                {{$state->id}}
                                            </td>
                                            <td>
                                                {{$state->name}} 
                                            </td>

                                            <td>
                                                {{count($state->lgas)}} 
                                            </td>

                                            <td>
                                            {{$citizens->first()->ward->lga->state->count()}} 
                                            </td>
                                           
                                          
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection