@include('back.partials.styles')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h1 class="h4 text-center mb-0">{{ isset($page) ? 'Modifier' : 'Créer' }} une Page</h1>
        </div>
        <div class="card-body">
            <form action="{{ isset($page) ? route('pages.update', $page) : route('pages.store') }}" method="POST">
                @csrf
                @if(isset($page))
                    @method('PUT')
                @endif

                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" name="title" id="title" class="form-control"
                        value="{{ old('title', $page->title ?? '') }}" required placeholder="Entrez le titre">
                </div>

                <div class="mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control"
                        value="{{ old('slug', $page->slug ?? '') }}" required placeholder="Entrez le slug">
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenu</label>
                    <textarea name="content" id="content" class="form-control" rows="5"
                        required placeholder="Saisissez le contenu">{{ old('content', $page->content ?? '') }}</textarea>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">
                        {{ isset($page) ? 'Mettre à jour' : 'Créer' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    <a href="{{ route('dashboard') }}" class="btn btn-primary">Retour au Dashboard</a>
</div>
@include('back.partials.scripts')
