@extends("livewire.layouts.admin")

@section("title", $product->name)

@section("content")
  <h1>Izmjena usluge {{$product->name}}</h1>
    <form method="Post" action="{{route('admin.product.update', $product->id)}}">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="name">Ime usluge</label>
                <input type="text" class='form-control' id="name" name="name" required value="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="price">Cijena:</label>
                <input type="number" step="0.01" class='form-control' id="price" name="price" required value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="description">Opis:</label>
                <textarea class='form-control summernote' id="description" name="description" required>{{$product->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Kategorija:</label>
                <select class='form-control' id="category_id" name="category_id" required>
                    @foreach ($categories as $category)
                    <option
                    @selected($category->id==$product->category_id)
                    value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary" type="submit">Sacuvaj uslugu</button>
            <a href="{{route('admin.product')}}" class="btn btn-secondary">Nazad</a>
    </form>
@endsection
