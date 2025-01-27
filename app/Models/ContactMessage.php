<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{ use HasFactory;

    protected $fillable = ['name', 'email', 'message', 'statut', 'user_id'];

    // Définir les constantes pour les statuts
    const STATUT_LU = 'lu';
    const STATUT_NON_LU = 'non_lu';

    // Relation avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
