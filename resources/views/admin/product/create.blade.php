@extends("livewire.layouts.admin")

@section("title", "Katalog")

@section("content")

  <h1>Unos nove usluge</h1>
    <form method="Post" action="{{route('admin.product.insert')}}">
        @csrf
            <div class="form-group">
                <label for="name">Ime usluge</label>
                <input type="text" class='form-control' id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="price">Cijena:</label>
                <input type="number" step="0.01" class='form-control' id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="description">Opis:</label>
                <textarea class='form-control summernote' id="description" name="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Kategorija:</label>
                <select class='form-control' id="category_id" name="category_id" required>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Dodaj novu uslugu</button>
            <a href="{{route('admin.product')}}" class="btn btn-secondary">Nazad</a>
    </form>
@endsection
