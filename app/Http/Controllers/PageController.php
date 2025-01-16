<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    // Affiche la liste des pages
    public function index()
    {
        $pages = Page::all();

        return view('back.pages.index', compact('pages')); // Utilise 'back.pages.index'
    }

    // Affiche le formulaire de création de page
    public function create()
    {
        return view('back.pages.form'); // Utilise 'back.pages.form'
    }

    // Enregistre une nouvelle page
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'slug' => 'required|unique:pages,slug',
        ]);

        // Création de la page
        $page = Page::create($request->all());

        // Redirection vers la page nouvellement créée, en utilisant son slug
        return redirect()->route('pages.show', ['slug' => $page->slug])->with('success', 'Page créée avec succès.');
    }


    // Affiche le formulaire d'édition
    public function edit(Page $page)
    {
        return view('back.pages.form', compact('page')); // Utilise 'back.pages.form'
    }

    // Met à jour une page existante
    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'slug' => 'required|unique:pages,slug,' . $page->id,
        ]);

        $page->update($request->all());

        return redirect()->route('pages.index')->with('success', 'Page mise à jour avec succès.');
    }

    // Supprime une page
    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page supprimée avec succès.');
    }
    // Affiche une page spécifique
    public function show($slug)
{
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('back.pages.show', compact('page')); // Créez une vue back.pages.show pour afficher la page
}

}



