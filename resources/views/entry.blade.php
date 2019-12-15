@extends('main')

@section('content')
  <nav class="navbar navbar-light bg-light" id="barrabusqueda">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Ejemplo de producto..." aria-label="Search">
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
  </nav>
    </ul>
    </nav>
    <nav class="main_bar">
        <ul class="menu_productos">
        <li class="botones_productos"><a href="/vercategoria">Ceramica</a></li>
        <li class="botones_productos"><a href="/vercuadros">Cuadros</a></li>
        <li class="botones_productos"><a href="/vermuebles">Muebles</a></li>
        <li class="botones_productos"><a href="/verdecoracion">Decoracion</a></li>
        <li class="botones_productos"><a href="/home">Todos los productos</a></li>
      </ul>
    </nav>
    </header>
    <br>
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <div class="item active">
      <img src="/img/abelpintos11.jpg" alt="Los Angeles" style="width:100%;">
      <img src="/img/bersuitlanuberosa.jpg" alt="Los Angeles" style="width:100%;">
    </div>

    <div class="item">
      <img src="/img/airbaglibertad.jpg" alt="Chicago" style="width:100%;">
      <img src="/img/pericosdesdecero.jpg" alt="Los Angeles" style="width:100%;">
    </div>

    <div class="item">
      <img src="/img/lalibrava.jpg" alt="New york" style="width:100%;">
    </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
    </a>
    </div>
    </div>
    <main>
    <div class="carrusel">
      <img src="" alt="">
    </div>
@endsection
