<?php

namespace App\Http\Controllers;

use App\Models\Page; // Import du modèle Page

class DashboardController extends Controller
{
    public function dashboard()
    {
        $pages = Page::all(); // Récupération de toutes les pages
        return view('back.dashboard', compact('pages')); // Transmet les pages à la vue




    }
}

