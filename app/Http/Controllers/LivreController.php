<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;

class LivreController extends Controller
{
    public function index()
    {
        return view('livre.livre', [
            'livre' => Livre::all()
        ]);
    }

    public function create()
    {
        return view('livre.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nom' => 'required|string',
        //     'auteur' => 'required|string',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image file types and size
        //     'disponible' => 'boolean',
        // ]);

        $livre = new Livre();
        $livre->nom = $request->input('nom');
        $livre->auteur = $request->input('auteur');
        $livre->quantite = $request->input('quantite');
         $livre->resume = $request->input('resume');
        $livre->disonible = $request->input('disonible', false);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $livre->image = 'images/' . $imageName;
        }

        $livre->save();
        return redirect()->route('livre.index');
    }

    public function show(string $id)
    {
        $livre = Livre::find($id);
    
        if (!$livre) {
            abort(404);
        }
    
        return view('livre.show', [
            'livre' => $livre
        ]);
    }
    

    public function edit(string $id)
    {
        $livre = Livre::find($id);
    
        if (!$livre) {
            abort(404);
        }
    
        return view('livre.edit', ['livre' => $livre]);
    }
    
    public function update(Request $request, string $id)
    {
        $livre = Livre::find($id);
    
        if (!$livre) {
            abort(404);
        }
        // $request->validate([
        //     'nom' => 'required|string',
        //     'auteur' => 'required|string',
        //     'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'disponible' => 'boolean',
        // ]);
    
        $livre->nom = $request->input('nom');
        $livre->auteur = $request->input('auteur');
        $livre->quantite = $request->input('quantite');
        $livre->resume = $request->input('resume');
        $livre->disonible = $request->input('disonible', false);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $livre->image = 'images/' . $imageName;
        }
    
        $livre->save();
        
        return redirect()->route('livre.show', ['livre' => $livre->id]);
    }
    


    public function destroy(string $id)
    {
        $livre = Livre::find($id);
    
        if (!$livre) {
            abort(404);
        }
    
        $livre->delete();
    
        return redirect()->route('livre.index');
    }
}
