@extends("livewire.layouts.public")

@section("title", "$category->name")

@section("content")

<h1>{{$category->name}}</h1>
<div>
    {{$category->description}}
</div>
@foreach ($category ->products as $product )
    <div class="panel">
        <h2>{{$product->name}}</h2>
        <p>Cena: {{$product->price}}EUR</p>
        <p><a href="{{route('product.show', $product->id)}}">Pogledaj detalje</a></p>
    </div>

@endforeach


@endsection
@section("sidebar")
    @include("partials.sidebar-kategorije")
@endsection
