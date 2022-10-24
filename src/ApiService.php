<?php

namespace App;

//require __DIR__."/../vendor/autoload.php";


$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();


define("URL", "https://api.themoviedb.org/3/movie/popular?api_key=".$_ENV['API_KEY']);
define("IMG_PATH", "https://image.tmdb.org/t/p/w500/");


class ApiService
{

    public function getPeliculas(): array
    {
        $peliculas=[];
        $datos = file_get_contents(URL);
        $datosJson = json_decode($datos);
        $datos1 = $datosJson->results; //es un array de 20 objetos
        foreach ($datos1 as $objPeli) {
           $peliculas[] = (new Peliculas)->setTitulo($objPeli->title)
            ->setCaratula(IMG_PATH.$objPeli->backdrop_path)
            ->setPoster(IMG_PATH.$objPeli->poster_path)
            ->setFecha($objPeli->release_date)
            ->setResumen($objPeli->overview);
        }
        //echo "<pre>";
       // var_dump($datosJson);
       // var_dump($peliculas);

       // echo "</pre>";
       // die();
        return $peliculas;
    }
}
// (new ApiService)->getPeliculas();
