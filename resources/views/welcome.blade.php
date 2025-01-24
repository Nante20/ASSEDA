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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('titre')</title>
@vite('resources/css/app.css')
  </head>

  <body>
      <div>

@include('partials.header')


      <div>

        @yield('content')

      </div>


@include('partials.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
