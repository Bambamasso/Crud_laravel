<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articlesController extends Controller
{
    //
    public function index(){
      return view('home');  
    }

    public function details($id){
      $id;
    return('bien');
    }

    public function ajouter(){
  
    return view('ajouter');
    }
    public function ajouter_traitement(){
  
      return view('ajouter');
      }
      public function modifier(){

      }
      public function modifier_traitement(){

      }
      public function supprimer(){

      }
}
