<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    @yield("title")
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

@include("partials.nav")

<div class="container">
    <div class="row">
        <div class="col-sm-4">
            @yield("sidebar")
        </div>
        <div class="col-sm-8">
            @yield("content")
        </div>
    </div>

</div>

</body>
</html>
