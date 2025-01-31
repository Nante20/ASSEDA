<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="container">
        <h1>{{ $page->title }}</h1>

        <p><strong>Slug:</strong> {{ $page->slug }}</p>
        <p><strong>Contenu:</strong> {!! nl2br(e($page->content)) !!}</p>

        <a href="{{ route('dashboard') }}" class="btn btn-primary">Retour au Dashboard</a>
    </div>
