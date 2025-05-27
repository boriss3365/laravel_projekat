@extends("livewire.layouts.admin")

@section("title", "Sve kategorije")

@section("content")
    <div class="container mt-4">
        <h2>Kategorije</h2>
        <a href="{{ route('admin.category.create') }}" class="btn btn-success mb-3">Dodaj novu kategoriju</a>


        <table id="datatable" class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Naziv</th>
                    <th>Opis</th>
                    <th>Akcije</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->name }}</td>
                        <td>{{ $cat->description }}</td>
                        <td>
                            <a href="{{ route('admin.category.edit', $cat->id) }}" class="btn btn-sm btn-primary">Izmjeni</a>

                            <form action="{{ route('admin.category.delete', $cat->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Da li ste sigurni da zelite da obrisete kategoriju?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Obriši</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
