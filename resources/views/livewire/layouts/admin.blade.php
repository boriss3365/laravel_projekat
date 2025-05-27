<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" rel="stylesheet">


</head>
<body>


<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
    {{--
     <li class="nav-item">
        <a class="nav-link" href="{{route('home')}}">Pocetna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">O nama</a>
      </li>
      --}}
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin')}}">Pocetna</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{route('admin.product')}}">Katalog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.category')}}">Kategorije</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.ponuda')}}">Ponude</a>
      </li>
      @auth
            <li class="nav-item" style="margin-left:110px;">
                        <span class="btn btn", style="font-weight: 600">Zdravo {{Auth::user()->name}},</span>
                        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-link">Logout</button>
                        </form>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('profile.edit')}}">Moj profil</a>
            </li>
      @endauth
    </ul>
  </div>
</nav>
@if (@Session::has('success'))
    <div class="container-fluid bg-success">
        {{Session::get('success')}}
    </div>
@endif
@if (@Session::has('error'))
    <div class="container-fluid bg-danger">
        {{Session::get('successerror')}}
    </div>
@endif

<div class="container-fluid">
    @yield("content")
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<!-- Summernote JS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $('#datatable').DataTable();

        $('.summernote').summernote({
            height: 250
        });
    });
</script>




</body>
</html>
