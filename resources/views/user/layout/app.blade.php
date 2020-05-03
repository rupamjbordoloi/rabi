<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>


  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous">
  </script>
</head>

<body>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <select class="form-control mr-sm-2" name="type">
            <option value="name" {{request('type')=='name'?'selected':''}}>Name</option>
            <option value="code" {{request('type')=='code'?'selected':''}}>Code</option>
            <option value="year" {{request('type')=='year'?'selected':''}}>Year</option>
            <option value="degree" {{request('type')=='degree'?'selected':''}}>Degree</option>
          </select>
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="q"
            value="{{request('q')}}">
          <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit">Search</button>
          <a class="btn btn-outline-warning my-2 my-sm-0" href="/">Reset</a>
        </form>
      </div>
    </nav>

    <main class="py-4">
      @yield('content')
    </main>
  </div>
</body>

</html>