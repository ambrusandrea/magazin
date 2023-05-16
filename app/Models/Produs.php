<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;
    
    protected $tabel = 'produse';

    protected $fillable = [
        'nume',
        'descriere',
        'nume_imagine',
        'pret',
        'created_at',
        'updated_at',
    ];
}
