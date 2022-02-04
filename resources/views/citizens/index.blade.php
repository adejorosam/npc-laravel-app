
@extends('layouts.app')
@section('title', 'Available citizens')
@section('content')
<div class="container-fluid mt-5">
    <div class="card card-register">
                    <div class="card-header">
                        <h5 class="card-title">citizens</h5>
                    </div>
                    <h1>All Citizens</h1>
                    <h2><strong>Number Of Citizen: </strong> {{count($citizens)}}</h2>

                    <a href="{{route('citizen.create')}}">Create A New Citizen</a>
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
                                        
                                        <th class="text"></th>
                                    </thead>
                                    <tbody>
                                        @foreach($citizens as $citizen)
                                        <tr>
                                            <td>
                                                {{$citizen->id}}
                                            </td>
                                            <td>
                                                {{$citizen->name}} 
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