@extends('layouts.admin')

@section('title')
    Dettaglio progetto:
@endsection

@section('content')
    <div class="container d-flex my-5 ">

        <div>
            <a href="{{ route('admin.projects.edit', $project) }}" class="card-link btn bg-warning text-dark mb-3"><i
                    class="fa-solid fa-pen"></i></a>
            {{-- DELETE FORM  --}}
            @include('admin.partials.formdelete')
        </div>

        <img class="img-show me-5" src="{{ $project->image }}" alt=" {{ $project->title }} ">
        <div>
            <h2 class="">{{ $project->title }}</h2>
            <p class="mt-5"> {{ $project->description }} </p>
            <p class="mt-3 fw-bold"> {{ $project->prog_lang }} </p>

        </div>

    </div>
@endsection
