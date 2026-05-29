<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."categoriasModelo.php");

class categoriasControlador
{

    static public function viewCategorias(){


        $categorias = categoriaModelo::viewCategorias();
         return $categorias;

    }

    static public function insertarCategorias($data){


        $insert = categoriaModelo::insertarCategorias($data);
         return $insert;

    }
    static public function viewCategoriasID($id){


        $categorias = categoriaModelo::viewCategoriasID($id);
         return $categorias;

    }

    static public function deleteCategoria($id){

        $delete = categoriaModelo::deleteCategoria($id);
        return  $delete;
    }
    

}
