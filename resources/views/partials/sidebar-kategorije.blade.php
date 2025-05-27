<h5 class="mb-3">Kategorije</h5>
<ul class="list-group">
    @foreach ($categories as $cat)
        <li class="list-group-item p-2">
            <a href="{{ route('product.category', $cat->id) }}" class="text-decoration-none text-dark">
                {{ $cat->name }}
            </a>
        </li>
    @endforeach
</ul>
