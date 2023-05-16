<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produs;
use App\Http\Requests\StoreProdusRequest;
use App\Http\Requests\UpdateProdusRequest;
class ProduseController extends Controller
{
   public function index()
   {
      $produse = Produs::latest()->paginate(10);
      return view('produse.index', compact('produse'));
   }

   public function create()
   {
      return view('produse.create');
   }
   
   public function store(Request $request)
   {

      $request->validate([
         'nume' => 'required',
         'nume_imagine' => 'required |image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         'descriere' => 'required',
         'pret' => 'required',
     ]);

      $fileName = time() . '.' . $request->nume_imagine->extension();
      $request->nume_imagine->storeAs('public/produse', $fileName);

     $produs=new Produs;
     $produs->nume=$request->input('nume');
     $produs->descriere=$request->input('descriere');
     $produs->pret=$request->input('pret');
     $produs->nume_imagine=$fileName;
     $produs->save();


     return redirect()->route('produse.index')->with('success','Produsul a fost creat cu succes!');
   }

   public function show(Produs $produs)
   {
      return view('produse.show',compact('produs'));
   }
 
   public function edit(Produs $produs)
   {
      return view('produse.edit',compact('produs'));

   }
   
   public function update($id, Request $request)
   {
      

      $produs=Produs::find($id);
      $produs->nume=$request->input('nume');
      $produs->descriere=$request->input('descriere');
      $produs->pret=$request->input('pret');
  
     if ($request->has('nume_imagine')){
         $fileName = time() . '.' . $request->nume_imagine->extension();
         $request->nume_imagine->storeAs('public/produse', $fileName);
         $produs->nume_imagine=$fileName;
      }

      $produs->save();

      return redirect()->route('produse.index')->with('success','Produsul a fost actualizat cu succes!');
   } 

   public function destroy(Produs $produs)
   {
      $produs->delete();
      return redirect()->route('produse.index')->withSuccess(__('Produsul a fost sters cu succes'));
   }
}