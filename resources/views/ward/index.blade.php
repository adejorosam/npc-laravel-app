
@extends('layouts.app')
@section('title', 'Available wards')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">wards</h5>
                    </div>
                    <h1>All Wards</h1>
                    <h2><strong>Number Of Wards: </strong> {{count($wards)}}</h2>

                    <a href="{{route('ward.create')}}">Create A New Ward</a>
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
                                            LGA
                                        </th>

                                        <th>
                                            State
                                        </th>

                                        <th>
                                            Number of citizens
                                        </th>
                                        
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($wards as $ward)
                                        <tr>
                                            <td>
                                                {{$ward->id}}
                                            </td>
                                            <td>
                                                {{$ward->name}} 
                                            </td>
                                            <td>
                                                {{$ward->lga->name}} 
                                            </td>

                                            <td>
                                                {{$ward->lga->state->name}} 
                                            </td>

                                            <td>
                                                {{count($ward->citizen)}} 
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