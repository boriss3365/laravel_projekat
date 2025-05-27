@extends('livewire.layouts.public')

@section('title', 'Kontakt')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Kontaktirajte nas</h2>
    <p>Molimo Vas da popunite formu ispod kako biste nas kontaktirali.</p>

    <form action="#" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Ime i prezime</label>
            <input type="text" class="form-control" id="name" placeholder="Unesite vaše ime" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email adresa</label>
            <input type="email" class="form-control" id="email" placeholder="Unesite email" required>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Naslov</label>
            <input type="text" class="form-control" id="subject" placeholder="Naslov poruke">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Poruka</label>
            <textarea class="form-control" id="message" rows="4" placeholder="Vaša poruka..." required></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Pošalji</button>
    </form>

    <hr class="my-5">

    <div>
        <h4>Kontakt informacije</h4>
        <p><strong>Telefon:</strong> +382 69-123-123</p>
        <p><strong>Email:</strong> cistionica54@gmail.com</p>
        <p><strong>Adresa:</strong> Ulica 43, Grad</p>
    </div>

    <div class="mt-4">
        <h5>Lokacija</h5>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3044730013103!2d20.45718157623879!3d44.81536147107079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ab26eb107e9%3A0x7fd51b4702d8675c!2z0KDQsNGH0YPQvdCw0YDRgdC60Lgg0YTQsNC60YPQu9GC0LXRgiDQo9C90LjQstC10YDQt9C40YLQtdGC0LAg0KPQvdC40L7QvQ!5e0!3m2!1sen!2srs!4v1748322214660!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>


@endsection
