<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <!-- <link rel="stylesheet" href={{mix('/profile/index.css')}}> -->
</head>

<body>
  @include ('sections.header')
  <main>
    @include ('sections.list-info-block')
    @include ('sections.footer')
  </main>
  <!-- <script src={{mix('/profile/index.js')}}></script> -->
</body>

</html>