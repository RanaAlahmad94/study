<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
    @extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Students for Group 1</h1>
    <ul>
      @foreach ($group as $comment)
        <li>{{ $comment->name }}</li>
      @endforeach
    </ul>
  </div>
@endsection
    </body>
</html>
