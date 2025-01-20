<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<div>
<br>
<br>
<br>
<br>
<a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>
<h1>Gérer les Pages</h1>

    <a href="{{ route('pages.create') }}" class="btn btn-secondary">Créer une nouvelle page</a>

    @if(isset($pages) && $pages->isEmpty())
    <p>Aucune page trouvée.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Slug</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->slug }}</td>
                        <td>
                            <a href="{{ route('pages.edit', $page) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('pages.destroy', $page) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

