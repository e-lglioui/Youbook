<?php

namespace App\Http\Controllers;
use  App\Models\Livre;


use Illuminate\Http\Request;

class LivreController extends Controller
{
  

    private static function getData() {
        return [
            ['id' => 1, 'name' => 'La Boîte à Merveilles', 'auteur' => 'Ahmed Sefrioui'],
            ['id' => 2, 'name' => 'L\'Étranger', 'auteur' => 'Albert Camus'],
            ['id' => 3, 'name' => 'Les Misérables', 'auteur' => 'Victor Hugo'],
            ['id' => 4, 'name' => 'Le Petit Prince', 'auteur' => 'Antoine de Saint-Exupéry'],
            
        ];
    }



    public function index()
    {
        return view('livre.livre', [
            'livre' => Livre::all()
        ]);
    }
    
    

 //___________________________________________________________________________
    public function create()
    {

        return view('livre.create');
    }

    //___________________________________________________________________________
    public function store(Request $request)
    {
       $livre=new Livre();
       $livre->nom= $request->input('nom');
       $livre->auteur = $request->input('auteur');
       $livre->save();
       return redirect()->route('livre.index');
    }

//___________________________________________________________________________
    public function show(string $id)
    {
        $livre=self::getData();
        $index=array_search($id,array_column($livre,'id'));
        if($index==false){
            abort(404);
        }
        return view('livre.show',[
            'livre'=>$livre[$index]
        ]);
        
    }

 //___________________________________________________________________________
    public function edit(string $id)
    {
        
    }

//___________________________________________________________________________
    public function update(Request $request, string $id)
    {
        
    }

//___________________________________________________________________________
    public function destroy(string $id)
    {
        
    }
}
