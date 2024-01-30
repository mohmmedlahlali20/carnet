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
            $Recettes= Recettes::findOrfail($id);
        return view('recettes.detail' ,compact('Recettes'));
    }

    public function create()
    {
        $recettes = new Recettes();
        return view('recettes.create',compact('recettes'));
    }

    public function store(RecettesRequest $request)
    {
        // dd();
        $formFields = $request->validated();
        if($request->hasFile('image')){
            $formFields['image'] = $request->file('image')->store('recettes');
        }
        Recettes::creat($formFields);
        
    }

    public function show(Recettes $recettes)
    {
        //
    }

    public function edit(Recettes $recettes)
    {
        //
    }

    public function update(Request $request, Recettes $recettes)
    {
        //
    }

    public function destroy(Recettes $recettes)
    {
        //
    }
}
