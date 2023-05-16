<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produs extends Model
{
    use HasFactory;

    protected $table = 'produse';

    protected $fillable = [
        'nume',
        'nume_imagine',
        'descriere',
        'pret',
        'created_at',
        'updated_at',
    ];
}
