<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecettesRequest;
use App\Models\Recettes;
use Illuminate\Http\Request;

class RecettesController extends Controller
{

    public function index()
    {
        $recettes = Recettes::orderBy('title', 'ASC')->paginate(6);
        return view('recettes.index', compact('recettes'));
    }

    public function Afficher_all()
    {
        $recettes = Recettes::orderBy('title', 'ASC')->paginate(5); 
        return view('recettes.home', compact('recettes')); 
    }

    public function Afficher_detail(Request $request)
    {
            $id = (int)$request->id;
            $recettes= Recettes::find($id);
            // dd($recettes);
            return view('recettes.detail' ,compact('recettes'));
    }

    public function create()
    {
       
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
        // dd($recette);
        if ($recette->save()) {
            return redirect()->route('recettes.index')->with('success', 'Recette ajoute');
        } 
    }

    public function show(Recettes $recettes)
    {
        //
    }

    public function edit($id)
    { 
        $isUpdate = true;

        $recettes = Recettes::find($id);
        // dd($recettes);
        return view('recettes.create',compact('recettes','isUpdate'));
    }

    public function update(RecettesRequest $request, Recettes $recettes , $id)
{
    $ID = Recettes::find($id);
    $formFields = $request->validated();

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images','public'); 
        $formFields['image'] = $imagePath;
    }
// dd($formFields);
$ID->update($formFields);
    
    return redirect()->route('recettes.index')->with('success', 'Recette mise à jour avec succès');
}

        public function destroy(Recettes $recette)
        { 
            $recette = Recettes::find($recette->id);
            $recette->delete();
            return redirect()->back()->with('success', 'Recette supprimée avec succès');
        }

        public function search(){
            $search = $_GET['query'];
            $recettes = Recettes::where('title' , 'LIKE' , '%' .$search.'%')->get();
            return view('recettes.search',compact('recettes'));
        }
        
    
}
