<?php
require_once("conexion.php");


class categoriaModelo{


    static public function viewCategorias(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM categorias"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

       


    }

    static public function viewCategoriasID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM categorias"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

    }

    static public function insertarCategorias($data){

        $con = ConexionMysql::ConectarMysql();
        $sql="INSERT INTO categorias (Nombre_Categoria, Estado_Categoria) 
                values(:nombre,:estado)";
        $sql = $con->prepare($sql);

       
        $nombre      = $data['Nombre_Producto'];
        $estado      = 1;
     
  
        $sql->bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $sql->bindParam(':estado',$estado,PDO::PARAM_INT);
  
        //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

        $sql->execute();

        $lastInsertId = $con->lastInsertId();
            if($lastInsertId>0){
              
                    return  1;
            }
            else{

               // print_r($sql->errorInfo()); 
                return 0;

            
            } 


    }

static public function deleteCategoria($id){


                    $con = ConexionMysql::ConectarMysql();
                    $consulta = "DELETE FROM categorias WHERE Id_Categoria = :id";
                    $sql = $con-> prepare($consulta);
                    $sql -> bindParam(':id', $id, PDO::PARAM_INT);
                    
                    // $id=trim($_POST['id']);
                    $sql->execute();
                    if($sql->rowCount() > 0)
                    {
                    $count = $sql -> rowCount();
                    //echo "<div class='content alert alert-primary' > 
                    //Gracias: $count registro ha sido eliminado  </div>";
                    return 1;
                    }
                    else{
                      //  echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

                    //print_r($sql->errorInfo());
                    return 0; 
                    }


}

}