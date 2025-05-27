@extends("livewire.layouts.public")

@section("title", "$product->name")

@section("content")
<h1>{{$product->name}}</h1>
<p>Cena: {{$product->price}} EUR</p>
<div>Opis: {{$product->description}}</div>
<a href="{{route('product.category', $product->category_id)}}">
    {{$product->category->name}}
</a>


@endsection
@section("sidebar")
    @include("partials.sidebar-kategorije")
@endsection
