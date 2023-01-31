<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilmController extends Controller
{

    /**
     * Affiche la liste de tous les films
     *
     * @return void
     */
    public function index(){
        return view('films', [
            "films" => Film::all()

        ]);
    }

    /**
     * Affichage les détails d'un film
     *
     * @param int $id id est un nombre entier
     * @return void
     */
    public function show($id){

         return view('film', [
             "film" => Film::findOrFail($id)
        ]);
    }

    /**
     * Affiche la liste de titres de films en fonction du texte passé en paramètre GET
     *
     * @param Request $request
     * @return void
     */
    public function rechercherFilm(Request $request){

        return view('recherche', [
            "films" => Film::where('title','like', "%$request->titre%")->get()

        ]);
     }
}
