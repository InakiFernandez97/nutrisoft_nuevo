<?php
require_once("conexion.php");


class menuModelo{


    static public function viewMenu(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM  menu WHERE estado = 1 AND aprobacion =1  ORDER BY  id desc";
        $query = $con->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }




    }

    static public function viewMenuAprobacion()
    {

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM menu WHERE aprobacion = 0";
        $query = $con->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        if ($query->rowCount() > 0)
        {

            return $results;
        } else
        {

            return 0;
        }




    }
    static public function viewMenuActivos(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM menu  WHERE estado = 1 AND aprobacion =1  ORDER BY  id DESC";
        $query = $con->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }




    }

    static public function todosMenu(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM menu  WHERE estado = 1 AND aprobacion =1 ";
        $query = $con->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }




    }
    static public function todosMenu2($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM menu_detalle md, productos pro  WHERE md.id_menu = $id AND md.id_producto = pro.Id_Producto";
        $query = $con->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }




    }
    static public function cargoProductos(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM productos";
        $query = $con->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }




    }

    static public function viewMenuID($id){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM menu WHERE id = $id";
        $query = $con->prepare($sql);
        $query -> execute();
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }

    }

    static public function insertarMenu($data){

        $con = ConexionMysql::ConectarMysql();
        $sql="INSERT INTO menu (nombre, fecha, usuario)
                values(:nombre,:fecha,:usuario)";
        $sql = $con->prepare($sql);


        $nombre      = $data['nombre'];
        $fecha       = date('Y-m-d');
        $usuario     = $data['usuario'];



        $sql->bindParam(':nombre',$nombre,PDO::PARAM_STR);
        $sql->bindParam(':fecha',$fecha,PDO::PARAM_STR);
        $sql->bindParam(':usuario',$usuario,PDO::PARAM_INT);

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

static public function deleteMenu($id){


                    $con = ConexionMysql::ConectarMysql();
                    $consulta = "DELETE FROM menu WHERE id = :id";
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

static public function deleteIngrediente($id){


    $con = ConexionMysql::ConectarMysql();
    $consulta = "DELETE FROM menu_detalle WHERE id_detalle = :id";
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

    print_r($sql->errorInfo());
    return 0;
    }


}

static public function activo($data){

    // echo $id;
     $con = ConexionMysql::ConectarMysql();




     $id                   = $data['id'];
     $estado               = $data['estado'];
     $consulta = "UPDATE menu SET  estado = :estado WHERE id = :id";

     $sql = $con-> prepare($consulta);
     $sql->bindParam(':estado',$estado,PDO::PARAM_INT);
     $sql->bindParam(':id',$id,PDO::PARAM_INT);


     $sql->execute();
     if($sql->rowCount() > 0)
     {
     //$count = $sql -> rowCount();
     //echo "<div class='content alert alert-primary' >
     //Gracias: $count registro ha sido eliminado  </div>";
     return 1;
     }
     else{
       //  echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

     print_r($sql->errorInfo());
     return 0;
     }


}


    static public function apruebo($data)
    {

        // echo $id;
        $con = ConexionMysql::ConectarMysql();




        $estado = 1;
        $consulta = "UPDATE menu SET aprobacion = :estado WHERE id = :id";

        $sql = $con->prepare($consulta);
        $sql->bindParam(':estado', $estado, PDO::PARAM_INT);
        $sql->bindParam(':id', $data, PDO::PARAM_INT);


        $sql->execute();
        if ($sql->rowCount() > 0)
        {
            //$count = $sql -> rowCount();
            //echo "<div class='content alert alert-primary' >
            //Gracias: $count registro ha sido eliminado  </div>";
            return 1;
        } else
        {
            //  echo "<div class='content alert alert-danger'> No se pudo eliminar el registro  </div>";

            print_r($sql->errorInfo());
            return 0;
        }


    }
static public function agregoIngrediente($data){

    $con = ConexionMysql::ConectarMysql();
    $sql="INSERT INTO menu_detalle (id_menu, id_producto, gramaje, carbohidrato, calorias, proteinas, comentario)
            values(:id_menu, :id_producto, :gramaje, :carbohidrato, :calorias, :proteinas, :comentario)";
    $sql = $con->prepare($sql);


                    $menu         =$data['menu'];
                    $producto     =$data['producto'];
                    $comentario   =$data['comentario'];
                    $gramaje      =$data['gramaje'];
                    $carbohidrato =$data['carbohidrato'];
                    $calorias     =$data['calorias'];
                    $proteinas    =$data['proteinas'];



    $sql->bindParam(':id_menu',$menu,PDO::PARAM_INT);
    $sql->bindParam(':id_producto',$producto,PDO::PARAM_INT);

    $sql->bindParam(':gramaje',$gramaje,PDO::PARAM_INT);
    $sql->bindParam(':carbohidrato',$carbohidrato,PDO::PARAM_INT);
    $sql->bindParam(':calorias',$calorias,PDO::PARAM_INT);
    $sql->bindParam(':proteinas',$proteinas,PDO::PARAM_INT);

    $sql->bindParam(':comentario',$comentario,PDO::PARAM_STR);


    //$sql->bindParam(':subtotal',$subtotal,PDO::PARAM_STR);

    $sql->execute();

    $lastInsertId = $con->lastInsertId();
        if($lastInsertId>0){

                return  1;
        }
        else{

            print_r($sql->errorInfo());
            return 0;


        }


}

static public function cantidadProducto(){

    // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva

     $con = ConexionMysql::ConectarMysql();
     $total = "SELECT COUNT(Id_Producto) AS Producto
     FROM productos";
     $query = $con->prepare($total);
     $query -> execute();
     $results = $query -> fetch(PDO::FETCH_OBJ);
     if($query -> rowCount() > 0){

         return $results;
     }else{

         return 0;
     }




}


static public function cantidadMenus(){

    // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva

     $con = ConexionMysql::ConectarMysql();
     $total = "SELECT COUNT(id) AS Menu
     FROM menu";
     $query = $con->prepare($total);
     $query -> execute();
     $results = $query -> fetch(PDO::FETCH_OBJ);
     if($query -> rowCount() > 0){

         return $results;
     }else{

         return 0;
     }




}

static public function cantidadPacientes(){

    // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva

     $con = ConexionMysql::ConectarMysql();
     $total = "SELECT COUNT(Id_Paciente) AS Pacientes
     FROM pacientes";
     $query = $con->prepare($total);
     $query -> execute();
     $results = $query -> fetch(PDO::FETCH_OBJ);
     if($query -> rowCount() > 0){

         return $results;
     }else{

         return 0;
     }




}

static public function cantidadEmpresas(){

    // $total = "SELECT SUM(Total_Venta) AS Total, COUNT(Id_Venta) AS Cantidad, SUM(Neto_Venta) AS TotalNeto, SUM//////(Iva_Venta) AS TotalIva

     $con = ConexionMysql::ConectarMysql();
     $total = "SELECT COUNT(Id_Empresa) AS Empresas
     FROM empresas";
     $query = $con->prepare($total);
     $query -> execute();
     $results = $query -> fetch(PDO::FETCH_OBJ);
     if($query -> rowCount() > 0){

         return $results;
     }else{

         return 0;
     }




}

static public function cargoMenuProfile(){

    $con = ConexionMysql::ConectarMysql();

    $sql = "SELECT * FROM menu WHERE estado = 1";
    $query = $con->prepare($sql);
    $query -> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
    if($query -> rowCount() > 0){

        return $results;
    }else{

        return 0;
    }




}

}