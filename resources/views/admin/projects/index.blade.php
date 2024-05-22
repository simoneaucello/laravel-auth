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
                            <button class="btn btn-warning"><i class="fa-solid fa-pencil"></i></button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
