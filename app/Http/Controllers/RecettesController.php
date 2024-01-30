<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecettesRequest;
use App\Models\Recettes;
use Illuminate\Http\Request;

class RecettesController extends Controller
{

    public function index()
    {
        $recettes = Recettes::paginate(5); 
        return view('recettes.index', compact('recettes')); 
    }

    public function Afficher_all()
    {
        $recettes = Recettes::paginate(5); 
        return view('recettes.home', compact('recettes')); 
    }

    public function Afficher_detail(Request $request)
    {
            $id = (int)$request->id;
            $recettes= Recettes::find($id);
            return view('recettes.detail' ,compact('recettes'));
    }

    public function create()
    {
        $recettes = new Recettes();
        $isUpdate = false;
        return view('recettes.create',compact('recettes' , 'isUpdate'));
    }

    public function store(RecettesRequest $request)
    {
        $validatedData = $request->validated();
        if($request->hasFile('image')){
            $validatedData['image'] = $request->file('image')->store('recettes', 'public');
        }
        $recette = new Recettes($validatedData);
        if ($recette->save()) {
            return redirect()->route('recettes.index')->with('success', 'Recette ajoute');
        } else {
            return redirect()->back()->withErrors(['error' , 'Une erreur ']);
        }
    }


    public function show(Recettes $recettes)
    {
        //
    }

    public function edit(Recettes $recettes)
    {

        $isUpdate = true;
       
        return view('recettes.create',compact('recettes','isUpdate'));
    }

    public function update(Request $request, Recettes $recettes)
    {
        //
    }

    
        public function destroy(Recettes $recette)
        { 
            $recette = Recettes::find($recette->id);
            $recette->delete();
            return redirect()->back()->with('success', 'Recette supprimée avec succès');
        }
        
    
}
