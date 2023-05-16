<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_produs',
        'nume',
        'cantitate',
        'pret',
        'imagine',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produs()
    {
        return $this->belongsTo(Produs::class);
    }
}
