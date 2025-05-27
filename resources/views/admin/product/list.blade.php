@extends("livewire.layouts.admin")

@section("title", "Katalog")

@section("content")

  <h1>Katalog usluga</h1>
  <a href="{{route('admin.product.create')}}" class="btn btn-success ">Dodaj novu uslugu</a>
  <br><br>
       <table id="datatable" class="table table-bordered">
       <thead>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Cijena</th>
            <th>Akcije</th>
        </tr>
       </thead>
       <tbody>
    @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="{{route('admin.product.edit', $product->id)}}"class="btn btn-primary">Izmjeni</a>
                <form action="{{route('admin.product.delete', $product->id)}}" method="POST" style="display:inline;" onsubmit="return confirm('Da li ste sigurni da zelite da obrisete ovu uslugu?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Obriši</button>
                </form>
            </td>
        </tr>
    @endforeach


@endsection
