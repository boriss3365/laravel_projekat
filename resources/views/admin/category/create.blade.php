@extends('livewire.layouts.admin')

@section('title', 'Dodaj kategoriju')

@section('content')
    <div class="container mt-4">
        <h2>Dodaj novu kategoriju</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.category.insert') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Naziv kategorije</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control summernote" id="description" name="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-dark">Sačuvaj</button>
            <a href="{{ route('admin.category') }}" class="btn btn-secondary">Nazad</a>
        </form>
    </div>
@endsection
