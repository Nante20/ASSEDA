<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />

    <meta name="description" content="@yield('meta_description', 'Description par défaut du site.')">
    <meta name="keywords" content="@yield('meta_keywords', 'association, migrants, aide, solidarité, Oullins')">
    <meta name="author" content="ASSEDA">

    <title>@yield('titre')</title>
    <link rel="icon" href="data:," />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>

  <body>
      <div>

@include('partials.header')


      <div>

        @yield('content')

      </div>


@include('partials.footer')

  </body>
</html>
