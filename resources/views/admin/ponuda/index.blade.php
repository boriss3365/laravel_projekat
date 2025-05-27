@extends('livewire.layouts.admin')

@section('title', 'Lista ponuda mjeseca')

@section('content')
    <h1>Ponuda mjeseca</h1>

    <a href="{{ route('admin.ponuda.create') }}" class="btn btn-success mb-3">Dodaj novu ponudu</a>


    <table id="datatable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Cijena (€)</th>
                <th>Akcije</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ponude as $ponuda)
                <tr>
                    <td>{{ $ponuda->id }}</td>
                    <td>{{ $ponuda->naziv }}</td>
                    <td>{{ $ponuda->opis }}</td>
                    <td>{{ $ponuda->cijena }}</td>
                    <td>
                        <a href="{{ route('admin.ponuda.edit', $ponuda->id) }}" class="btn btn-sm btn-primary">Izmjeni</a>
                        <form method="POST" action="{{ route('admin.ponuda.delete', $ponuda->id) }}" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Da li ste sigurni da zelite da obrisete ponudu?')">Obriši</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
