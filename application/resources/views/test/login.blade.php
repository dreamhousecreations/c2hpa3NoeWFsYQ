<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- <title>{{ config('app.name', 'Shikshyala') }}</title> -->
  <title>Shikshyala</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color:#41c15d">
    <div class="container">
      <div class="row justify-content-center">
      <div class="col">
        <div class="card" style="width: 20rem;">
          <div class="card-block">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
    </div>


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>