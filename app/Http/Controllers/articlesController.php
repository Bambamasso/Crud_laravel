<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;


class articlesController extends Controller
{
    //
    public function index(){
      $articles=Article::All();
      return view('home', ['donne'=>$articles]);  
    }

    public function details($id){
      $id;
    return('bien');
    }

    public function ajouter(){
  
    return view('ajouter');
    }
    public function ajouter_traitement(Request $request){
  
      $nom= $request->input('nom');
      $description=$request->input('description');

       $article= new Article();
       $article->nom=$nom;
       $article->description=$description;
       $article->save();
       return redirect()->route('index');
      }
      public function modifier($id){
      $article= Article::find($id);
      return view('update', ['modifArt'=>$article]);
      }
      public function modifier_traitement(Request $request,$id){
        $nom=$request->input('nom');
        $description=$request->input('description');
  
         $article= Article::find($id);
         $article->nom=$nom;
         $article->description=$description;
         $article->update();
        return redirect()->route('index');
         
      }
      public function supprimer($id){
      $article= Article::find($id);
      $article->delete();
      return redirect()->route('index')->with('status', 'L\article à bien été supprimer avec succes');
      }
}
