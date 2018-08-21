<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
  protected $peliculas;

  public function __construct(){
    $this->peliculas = [
                      1 => "Toy Story",
                      2 => "Buscando a Nemo",
                      3 => "Avatar",
                      4 => "Star Wars: Episodio V",
                      5 => "Up",
                      6 => "Mary and Max"
                      ];
    }

    public function buscarPeliculaId($id){
      if (($id <1) || ($id > 6)){
        return "No existe pelicula " .$id;
      }
      return $this->peliculas[$id];
    }

    public function buscarPeliculaNombre($nombre){
      foreach ($this->peliculas as $pelicula){
        if ($pelicula==$nombre){
          return $nombre;
        }
      }
      return "No se encontraron resultados.";
    }
}
