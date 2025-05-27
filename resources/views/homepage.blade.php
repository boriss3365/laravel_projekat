@extends('livewire.layouts.public')

@section('title', 'Početna')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">Izdvajamo iz ponude!</h1>

    <div class="row justify-content-center" style="background-color: rgb(40, 255, 40);">
        @foreach($ponuda as $item)
            <div class="col-12 col-md-6 col-lg-4 d-flex align-items-stretch mb-4">
                <div class="card w-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->naziv }}</h5>
                        <p class="card-text">{{ $item->opis }}</p>
                        <p class="card-text fw-bold">{{ $item->cijena }} €</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
