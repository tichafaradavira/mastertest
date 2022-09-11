@extends('layouts.layout')
@section('content')
    @if(sizeof($repositories))
        <div class="row p-6 text-center">
            <h3 class="fw-bold">Top <span class="text-capitalize text-danger">{{$repo_type}}</span> PHP Repositories.
            </h3>
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
                            <label><span class="fst-italic">Url:</span> <a
                                    href="#">{{$repository["url"]}}</a></label><br>
                            <label><span class="fst-italic">Description:</span> </label><br>
                            <p class="card-text">{{$repository["description"]}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="row p-6 text-center">
            <div class="col-12 m-4">
                <div class="alert alert-danger m-6" role="alert">
                    <span class="fw-bold">Unknown Repository type.</span>
                    <h5>Valid options<h5>
                            <span class="fw-bold">1.local</span><br>
                            <span class="fw-bold">2.github</span>
                </div>
            </div>
        </div>
    @endif
@stop

