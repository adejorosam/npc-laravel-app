
@extends('layouts.app')
@section('title', 'Available Lgas')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">lga</h5>
                    </div>
                    <h1>All LGAs</h1>
                    <h2><strong>Number Of LGAs: </strong> {{count($lgas)}}</h2>

                    <a href="{{route('lga.create')}}">Create A New LGA</a>
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
                                            State
                                        </th>

                                        <th>
                                            No of wards
                                        </th>

                                        <th>
                                            No of citizens
                                        </th>

                                        
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($lgas as $lga)
                                        <tr>
                                            <td>
                                                {{$lga->id}}
                                            </td>
                                            <td>
                                                {{$lga->name}} 
                                            </td>

                                            <td>
                                                {{$lga->state->name}} 
                                            </td>

                                            <td>
                                                {{count($lga->wards)}} 
                                            </td>

                                            <td>
                                                {{$citizens->first()->ward->lga->count()}} 
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