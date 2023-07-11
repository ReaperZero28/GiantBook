<!doctype html>
<html lang="en">
  <head>
    <style>
        body{
            background-color: #F3EFE0 !important;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giant Book Supplier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body style="position: relative">
    <nav style="background-color: #820000;" class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a style="font-weight: bold" class="navbar-brand" href="#">Giant Book Supplier</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link @yield('navHome')" aria-current="page" href="/home">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                <ul class="dropdown-menu">
                    @foreach ($category as $listCategory)
                        <li><a class="dropdown-item" href="/category/{{$listCategory->id}}">{{$listCategory->name}}</a></li>
                    @endforeach
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('navPublisher')" href="/publisher">Publisher</a>
              </li>
              <li class="nav-item">
                <a class="nav-link @yield('navContact')" href="/contact">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Search</button>
            </form>
        </div>
      </nav>
        @yield('header')
        @yield('content')
      <footer class="footer" style="background-color: #820000; color: white;
      height: 3rem; display:flex; align-items: center; justify-content:center; position:absolute; width:100%; bottom:0; margin-top: 3rem">Giant Book Supplier</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
