@extends("livewire.layouts.public")

@section("title", $blog['naslov'])

@section("content")

    <h3>{{ $blog['naslov']}}</h3>


    @if($blog['featured'])
        <div>
            <span class="badge bg-success">Istaknuta objava</span>
        </div>
    @endif
    <div>
        {{ \Carbon\Carbon::parse($blog['published_date'])->format("d.m.Y")}}
    </div>

    <div>
        {{ $blog['intro']}}
    </div>

    <div>
        {!! $blog['content']!!}
    </div>

@endsection



