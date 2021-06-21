<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="home.scss">
  <title>HomePage</title>
  <link rel="stylesheet" href="/css/home.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Khula:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <div class="header-left">
      <img src="https://www.boolean.careers/images/misc/logo.png" alt="">
    </div>
    <div class="header-right">
      <ul>
        @foreach ($links as $link )
          <li><a href="@if($link !=='home') {{$link}}@endif">{{strtoupper($link)}}</a></li>
        @endforeach
      </ul>
    </div>
  </header>
  <main>
    <div class="main-container clearfix">
      <div class="col main-left">
        <h2>Cambia la tua vita. <br>Entra in Boolean.</h2>
        <h4>Segui il corso di 6 mesi, diventi un web developer e inizi una nuova carriera</h4>
        <ul>
          <li>Nessuna competenza richiesta</li>
          <li>Lezioni online</li>
          <li>Se non trovi lavoro ti rimborsiamo</li>
        </ul>
        <button>Candidati ora!</button>
      </div>
      <div class="col main-right">
        <img src="https://miro.medium.com/max/1000/1*TpAfeJbo1UQQTwor9lpc0g.jpeg" alt="">
      </div>
    </div>
  </main>
</body>
</html>