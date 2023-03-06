<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infirmiere;

class InfirmieresController extends Controller
{
    function index(){
        $infirmiere = Infirmiere::cursor();
        return view('welcome',['allinfirmiere'=>$infirmiere]);
    }
    
    function add_infirmiere(){
        return view('addinfirmiere');
    }

    function store(Request $request){

        $infirmiere= new Infirmiere();
        $infirmiere->nom = $request->nom;
        $infirmiere->prenom = $request->prenom;
        $infirmiere->dateNaissance = $request->dateNaissance;
        $infirmiere->anciennete = $request->anciennete;
        $infirmiere->affectation = $request->affectation;
        $infirmiere->save();
        return redirect('/');
    }

    function deleteinfirmiere($id){
        $infirmiere = Infirmiere::find($id);
        $infirmiere->delete();
        if (!$infirmiere->delete()) {
            return redirect()->back()->withErrors('message' , 'La Suppression échoué');
        }
        return redirect('/')->with('message','Supprimer avec succes');
    }

    function modifierInfirmiere($id){
        $infirmiere = Infirmiere::find($id);
        return view('modifierinfirmiere',['infirmiere'=>$infirmiere]) ;
    }

    function updateInfirmiere(Request $request){
        $infirmiere = Infirmiere::find($request->id);
        $infirmiere->nom = $request->nom;
        $infirmiere->prenom = $request->prenom;
        $infirmiere->dateNaissance = $request->dateNaissance;
        $infirmiere->anciennete = $request->anciennete;
        $infirmiere->affectation = $request->affectation;
        $infirmiere->save();

        if (!$infirmiere->save()) {
            return redirect()->back()->withErrors('message' , 'La Modification échoué');
        }
        return redirect('/')->with('message','Modifier avec succes');

    }
}
