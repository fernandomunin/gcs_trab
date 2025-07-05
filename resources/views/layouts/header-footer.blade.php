<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Sportiva">
  <meta name="keywords" content="Sportiva, Roupas esportivas">
  <meta name="author" content="Carlos, Fernando, Natan, Thales">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="/css/styles.css">

  <!-- Scrpit Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Scrpit -->
  <script src="/js/script.js"></script>

  <!-- Ícones -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!-- Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <title>@yield('title')</title>
</head>

<body id="topo">
  <header class="fc-r-sp">
    <h1>Sportiva</h1>
    <a href="/">Home</a>

    @guest
        <a href="/register">Registrar-se</a>
        <a href="/login">
            <ion-icon size="large" name="person-circle-outline"></ion-icon>
        </a>
    @endguest

    @auth
        <a href="/produtos/adicionar">Adicionar produto</a>
        <form action="/logout" method="POST">
            @csrf
            <a  href="/logout"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                <ion-icon size="large"name="exit-outline"></ion-icon>
            </a>
        </form>
    @endauth

  </header>
  <nav>
    <a href="#">lorem ipsum</a>
    <a href="#">lorem ipsum</a>
    <a href="#">lorem ipsum</a>
    <a href="#">lorem ipsum</a>
  </nav>
  <main>
     @yield('mainContent')
  </main>
  <footer>
    Sportiva &copy; 2024
    <a href="#topo">Voltar ao topo</a>
  </footer>
</body>
