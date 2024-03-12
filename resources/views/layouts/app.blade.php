<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ url('css/app.css')}}">
  <title>@yield('title')</title>
  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary z-0" style="height: 59px">
    <div class="container-fluid mx-auto" style="width: 1200px">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="numbers navbar-nav">
          <li class="nav-item">
            <a class="header-number nav-link" aria-current="page">+7 905 928 44 34</a>
          </li>
          <li class="nav-item">
            <a class="header-number nav-link">8 3852 123456</a>
          </li>
        </ul>
        <ul class="menu navbar-nav mx-auto">
          <li class="nav-item" style="">
            <a class="header-number nav-link" onclick="toggle_visibility()">Гарантия</a>
          </li>
          <li class="nav-item">
            <a class="header-number nav-link" onclick="toggle_visibility()">Доставка</a>
          </li>
          <li class="nav-item">
            <a class="header-number nav-link" onclick="toggle_visibility()">О нас</a>
          </li>
          <li class="nav-item">
            <a class="header-number nav-link" onclick="toggle_visibility()">Помощь</a>
          </li>
        </ul>
        <ul class="cartacc navbar-nav" onclick="toggle_visibility()">
          <li class="cart row nav-item" style="justify-content: center">
            <i class="fa-solid col-md-4 pt-2 fa-cart-shopping" style="font-size: 28px"></i>
            <div class="textcart col-md-8" style="padding-left: 6px">
              <div class="col-md-12 row">
                <a>Корзина</a>
              </div>
              <div class="row">
                <div class="col-md-4 row" style="font-size: 11px">
                  <a>0</a>
                </div>
                <div class="col-md-8 row" style="font-size: 11px">
                  <a>руб.</a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="alert alert-danger alert-dismissible fade show m-2" id="alert" style="position: absolute; display: none" role="alert">
    <h5 class="alert-heading">Ошибка</h5>
    <p>В разработке</p>
    <button type="button" class="btn-close" onclick="untoggle_visibility()" aria-label="Close"></button>
    </div>
  <header class="mx-auto" style="width: 1200px">
    <div class="row">
      <img src="{{ asset('images/logo.png') }}" alt="" style="width: 450px">
      <div class="search"></div>
    </div>
  </header>
  <div class="main-container mx-auto" style="width: 1200px; max-width: 1200px">
    @yield('content')
  </div>
  <script src="https://kit.fontawesome.com/cf657ded52.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
    function toggle_visibility() {
        document.getElementById("alert").style.display = 'block';
    }
    function untoggle_visibility(){
        document.getElementById("alert").style.display = 'none';
    }
 </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>