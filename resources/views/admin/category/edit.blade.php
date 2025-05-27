@extends('livewire.layouts.admin')

@section('title', 'Izmeni kategoriju')

@section('content')
<div class="container mt-4">
    <h2>Izmjena kategorije</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.category.update', $category->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Naziv kategorije</label>
            <input type="text summernote" name="name" id="name" value="{{ old('name', $category->name) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Opis</label>
            <textarea class="form-control summernote" id="description" name="description" rows="3">{{$category->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Sačuvaj izmjene</button>
        <a href="{{ route('admin.category') }}" class="btn btn-secondary">Nazad</a>
    </form>
</div>
@endsection
