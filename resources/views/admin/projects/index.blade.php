@extends('layouts.admin')

@section('content')
    <div class="container my-5">

        <h1>Progetti:</h1>

        <table class="table crud-table">
            <thead>
                <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Linguaggi utilizzati</th>
                    <th scope="col">Azioni</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td><img class="cover-img" src="{{ $project->image }}" alt="{{ $project->title }}"></td>
                        <td class="fw-bold">{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->prog_lang }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}"
                                class="card-link btn bg-success text-white"> <i class="fa-solid fa-circle-info"></i></a>
                            <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pencil"></i></a>
                            @include('admin.partials.formdelete')

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
