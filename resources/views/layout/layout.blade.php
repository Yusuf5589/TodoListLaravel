<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="Yusuf Kapkiner-Yusuf5589">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("mdbootstrap/css/mdb.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}">
    <link rel="stylesheet" href="{{ asset("fontawasome/css/all.min.css") }}">
    <title>TodoList</title>
</head>
<body>
    


    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">TodoList</a>
          <button
            class="navbar-toggler text-white"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="#" style="font-size: 0.9rem">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @yield('content')



    <script src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("mdbootstrap/js/mdb.min.js") }}"></script>
    <script src="{{ asset("fontawasome/js/all.min.js") }}"></script>
</body>
</html>