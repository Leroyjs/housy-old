<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <link rel="stylesheet" href={{mix('/welcome/index.css')}}>
</head>

<body>
@include ('sections.header')
<main>
  @include ('sections.first-section')
  @include ('sections.snip')
  @include ('sections.expertise')
  @include ('sections.mission')
  @include ('sections.footer')
</main>
<script src={{mix('/welcome/index.js')}}></script>
</body>

</html>
