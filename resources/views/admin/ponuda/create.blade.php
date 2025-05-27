@extends('livewire.layouts.admin')

@section('title', 'Dodaj ponudu mjeseca')

@section('content')
    <h1>Dodaj ponudu mjeseca</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.ponuda.insert') }}">
        @csrf
        <div class="mb-3">
            <label for="naziv" class="form-label">Naziv</label>
            <input type="text" class="form-control" id="naziv" name="naziv" required>
        </div>

        <div class="mb-3">
            <label for="opis" class="form-label">Opis</label>
            <textarea class="form-control summernote" id="opis" name="opis" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="cijena" class="form-label">Cijena (€)</label>
            <input type="number" class="form-control" id="cijena" name="cijena" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-dark">Sačuvaj</button>
    </form>
@endsection
