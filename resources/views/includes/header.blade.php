<!DOCTYPE html>
<html lang="ru">
<head>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Сайт site-site</title>

    <script src="js/jquery.js"></script>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('main') }}">Сайт Алисы</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">О нас</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ещё
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('survey') }}">Опрос</a></li>
              </ul>
            </li>
          </ul>

          @guest

          <ul class="list-group list-group-horizontal">
    
            <li class="list-group-item">
              <a class="nav-link" href="{{ route('login') }}">Войти</a>
            </li>
            <li class="list-group-item">
              <a class="nav-link" href="{{ route('register') }}">Зарегистрироваться</a>
            </li>
    
          </ul>
    
          @endguest
    
          @auth
        
            <ul class="authed list-group list-group-horizontal">
              <li>
                {{ Auth::user()->login }}
              </li>
              <li class="list-unstyled">
                <a class="" href="{{ route('logout') }}">Выйти</a>
              </li>
            </ul>
      
          @endauth
      </div>
    </div>
    
  </nav>