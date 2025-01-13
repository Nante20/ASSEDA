<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
<title>@yield('title')</title>

@include('back.partials.styles')

  </head>

  <body>

<div class="main-wrapper">

     @include('back.partials.header')

    <div class="content container-fluid">

        @yield('dashboard-content')

    </div>


@include('back.partials.scripts')
</div>
  </body>
</html>
