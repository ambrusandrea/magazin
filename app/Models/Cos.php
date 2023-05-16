<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cos extends Model
{
    use HasFactory;

    protected $tabel = 'cos';

    protected $fillable = [
        'produs_id',
        'cantitate',
        'pret',
        'utilizator_id',
        'created_at',
        'updated_at',
    ];
}
