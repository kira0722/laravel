<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //pagina principal de cursos
    public function index(){
        return "Bienvenido a la pagina de cursos";
    }

    //pagina para crear curso
    public function create(){
        return "Bienvenido a la pagina para crear un curso";
    }
    
    //pagina para dar la bienvenida a algun curso en especifico en la url
    public function show($curso){
        return "Bienvenido a la pagina de: $curso";
    }

    //pagina para mostrar cursos segun categoria opcional
    public function showCat($curso, $cat = null){
        if($cat){
            return "Bienvenido al curso de: $curso, de la categoria de: $cat";
        }else{
            return "Bienvenido a la pagina de: $curso";
    
        } 
    }
}
