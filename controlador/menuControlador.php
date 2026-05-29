<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."menuModelo.php");

class menuControlador
{

    static public function viewMenu(){


        $productos = menuModelo::viewMenu();
         return $productos;

    }

      static public function viewMenuAprobacion(){


        $productos = menuModelo::viewMenuAprobacion();
         return $productos;

    }


    static public function viewMenuID($data){


        $productos = menuModelo::viewMenuID($data);
         return $productos;

    }

    static public function insertarMenu($data){
        $data = array(
            "nombre"=>$_POST['nombre'],
            "usuario"=>$_POST['usuario']
        );

        // $img = self::SaveImagenes($_FILES['imagen']);


        $insert = menuModelo::insertarMenu($data);
         return $insert;

    }


    static public function viewMenuActivos(){

        $delete = menuModelo::viewMenuActivos();
        return  $delete;
    }
    static public function todosMenu(){

        $delete = menuModelo::todosMenu();
        return  $delete;
    }

    static public function cargoProductos(){

        $delete = menuModelo::cargoProductos();
        return  $delete;
    }

    static public function cargoMenuProfile(){

        $delete = menuModelo::cargoMenuProfile();
        return  $delete;
    }



    static public function todosMenu2($id){

        $delete = menuModelo::todosMenu2($id);
        return  $delete;
    }

    static public function deleteMenu($id){

        $delete = menuModelo::deleteMenu($id);
        return  $delete;
    }
    static public function deleteIngrediente($id){

        $delete = menuModelo::deleteIngrediente($id);
        return  $delete;
    }


    static public function activo($data){


        $productos = menuModelo::activo($data);
         return $productos;

    }

    static public function agregoIngrediente($data){

        $productos = menuModelo::agregoIngrediente($data);
         return $productos;

    }

    static public function cantidadProducto(){

        $delete = menuModelo::cantidadProducto();
        return  $delete;
    }

    static public function cantidadMenus(){

        $delete = menuModelo::cantidadMenus();
        return  $delete;
    }

    static public function cantidadPacientes(){

        $delete = menuModelo::cantidadPacientes();
        return  $delete;
    }

    static public function cantidadEmpresas(){

        $delete = menuModelo::cantidadEmpresas();
        return  $delete;
    }

    static public function apruebo($data)
    {


        $productos = menuModelo::apruebo($data);
        return $productos;

    }

}

if (isset($_POST['insermenu'])) {


    //var_dump($_POST);

        $data = array(
            "nombre"=>$_POST['nombre'],
            "usuario"=>$_POST['usuario']

        );
    $insert = menuControlador::insertarMenu($data);

    if($insert == 1){
        $mensaje = 'Menú cargado correctamente';
        $estado = 1;
    }else{
        $mensaje = 'Problemas cargando la Categoría, intentelo nuevamente';
        $estado = 0;

    }


    $resultado = array(
        "estado" => $estado,
        "mensaje" => $mensaje

    );
    echo json_encode($resultado);




    }

    if (isset($_POST['activo'])) {


        //var_dump($_POST);

            $data = array(
                "id"=>$_POST['id'],
                "estado"=>$_POST['estado']

            );
        $insert = menuControlador::activo($data);

        if($insert == 1){
            $mensaje = 'Menú modificado correctamente';
            $estado = 1;
        }else{
            $mensaje = 'Problemas modificando menú, intentelo nuevamente';
            $estado = 0;

        }


        $resultado = array(
            "estado" => $estado,
            "mensaje" => $mensaje

        );
        echo json_encode($resultado);




        }


        if (isset($_POST['insertoIngrediente'])) {


            //var_dump($_POST);

                $data = array(
                    "menu"=>$_POST['menu'],
                    "producto"=>$_POST['producto'],
                    "comentario"=>$_POST['comentario'],
                    "gramaje"=>$_POST['gramaje'],
                    "carbohidrato"=>$_POST['carbohidrato'],
                    "calorias"=>$_POST['calorias'],
                    "proteinas"=>$_POST['proteinas']


                );
            $insert = menuControlador::agregoIngrediente($data);

            if($insert == 1){
                $mensaje = 'Ingrediente agregado correctamente';
                $estado = 1;
            }else{
                $mensaje = 'Problemas agregando ingrediente, intentelo nuevamente';
                $estado = 0;

            }


            $resultado = array(
                "estado" => $estado,
                "mensaje" => $mensaje

            );
            echo json_encode($resultado);




            }


         if (isset($_POST[ 'aprobacion' ]))
            {


                //var_dump($_POST);

             
                 $id =  $_POST[ 'id' ];
                $insert = menuControlador::apruebo($id);

                        if ($insert == 1)
                        {
                            $mensaje = 'Menú Aprobado correctamente';
                            $estado = 1;
                        } else
                        {
                            $mensaje = 'Problemas Aprobando menú, intentelo nuevamente';
                            $estado = 0;

                        }


                $resultado = array(
                    "estado" => $estado,
                    "mensaje" => $mensaje

                );
                echo json_encode($resultado);




            }