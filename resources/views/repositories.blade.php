@extends('layouts.layout')
@section('content')
    <div class="row p-6 text-center">
        <h3 class="fw-bold">Top <span class="text-capitalize text-danger">{{$repo_type}}</span> PHP Repositories.</h3>
        <hr>
        @foreach ($repositories as $repository)
            <div class="col-12 m-4">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <span class="fw-bold">Repository  #{{$loop->iteration}}</span>
                    </div>
                    <div class="card-body">
                        <label><span class="fst-italic">Name:</span><span
                                class="fw-bold"> {{$repository["name"]}}</span></label><br>
                        <label><span class="fst-italic">Stars:</span> <span
                                class="fw-bold">{{$repository["stars"]}}</span></label><br>
                        <label><span class="fst-italic">Url:</span> <a href="#">{{$repository["url"]}}</a></label><br>
                        <label><span class="fst-italic">Description:</span> </label><br>
                        <p class="card-text">{{$repository["description"]}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@stop

