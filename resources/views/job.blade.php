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
          <li><a href="@if($link !=='home'){{$link}} @else / @endif">{{strtoupper($link)}}</a></li>
        @endforeach
      </ul>
    </div>
  </header>
  <main>
    <div class="main-container clearfix">
      <div class="col main-left">
        <h2>Sei a un passo dal lavoro dei tuoi sogni!</h2>
        <h4>Alla fine del corso sarai assistito dai nostri Career Advisors, cosicchè tu riesca an entrare nel mondo del lavoro totalmente accompagnato e seguito</h4>
        <button>Candidati ora!</button>
      </div>
      <div class="col main-right">
        <img src="https://dy7oszgl9a56g.cloudfront.net/wp-content/uploads/2020/01/20095625/blog_header_job_interview.jpg" alt="">
      </div>
    </div>
  </main>
</body>
</html>