@extends("livewire.layouts.public")

@section("title", "Katalog")

@section("content")
<div class="container mt-4">
    <div class="row">

        <div class="col-md-3">
            <h4>Kategorije:</h4>
            <ul class="list-group">
                @foreach ($categories as $cat)
                    <li class="list-group-item">
                        <a href="{{ route('product.category', $cat->id) }}">
                            {{ $cat->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>


        <div class="col-md-9">
            <h4>Usluge:</h4>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text"><strong>{{ $product->price }} €</strong></p>
                                <p class="card-text"><small class="text-muted">{{ $product->category->name }}</small></p>
                                <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary btn-sm">Detalji</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
