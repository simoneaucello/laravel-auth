@extends('layouts.admin')

@section('content')
    <div class="container my-4">

        <h1>DASHBOARD</h1>
        <h2>Sono presenti <span class="text-danger">{{ $project_count }}</span> progetti </h2>

        <div class="mt-5">
            <h2 class="mb-5">Ultimo progetto:</h2>
            <h3 class="text-danger"> {{ $last_project->title }} </h3>
            <div class="">
                <img class="img-show" src="{{ $last_project->image }}" alt="">
                <p>{{ $last_project->description }} </p>
            </div>
        </div>
    </div>
@endsection
