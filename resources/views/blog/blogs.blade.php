@extends("livewire.layouts.public")

@section("title", "Blog")

@section("content")
    <h1>Blogs</h1>
    @foreach ($blogs as $blog)
        @if ($blog['featured'])
            <div class="card bg-dark mb-3 text-white" style="border: 1px solid rgb(202, 29, 29)">
        @else
            <div class="card" style="border: 1px solid rgb(153, 146, 146)">
        @endif


            <div class="card-body">
                <h3>{{$blog['naslov']}}</h3>
                <div>
                    {{$blog['featured']}}
                </div>
                <div>
                    {{$blog['published_date']}}
                </div>
                <div>
                    {{$blog['intro']}}
                </div>
                <a class="btn btn-primary" href="{{route('blog', ['id'=>$blog['id']])}}">Read more...</a>


            </div>
        </div>
    @endforeach

@endsection
