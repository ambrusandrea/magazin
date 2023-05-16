<?php

namespace App\Http\Controllers;

use App\Models\Cos;
use Illuminate\Http\Request;
use App\Models\Produs;

class CosController extends Controller
{
    public function adaugaInCos($id_produs)
    {
        $produs = Produs::find($id_produs);

        if (!$produs) {
            abort(404);
        }

        $cos_produs = Cos::where('id_produs', $id_produs)->first();

        if ($cos_produs) {
            $cos_produs->increment('cantitate');
        } else {
            Cos::create([
                'id_produs' => $id_produs,
                'nume' => $produs->nume,
                'cantitate' => 1,
                'pret' => $produs->pret,
                'imagine' => $produs->imagine,
            ]);
        }

        return redirect()->back()->with('success', 'Produsul a fost adaugat in cos!');
    }
    public function index()
{
    $cos = auth()->user()->cos;
    
    return view('cos.index2', ['cos' => $cos]);
}

}