<?php
require_once("conexion.php");


class pizarraModelo{


    static public function  viewPizarraDesayuno(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM pizarradesayuno"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
    }

    static public function updatePizarraDesayuno($data){
     $con = ConexionMysql::ConectarMysql();
     $consulta = "UPDATE pizarradesayuno SET de1 = :de1,
                                             de2 = :de2,
                                             de3 = :de3,
                                             de4 = :de4,
                                             de5 = :de5,
                                             de6 = :de6,
                                             de7 = :de7,
                                             de8 = :de8,
                                             de9 = :de9,
                                             de10 = :de10,
                                             de11 = :de11,
                                             de12 = :de12,
                                             de13 = :de13,
                                             de14 = :de14,
                                             de15 = :de15,
                                             de16 = :de16,
                                             de17 = :de17,
                                             de18 = :de18,
                                             de19 = :de19,
                                             de20 = :de20,
                                             de21 = :de21,
                                             de22 = :de22,
                                             de23 = :de23,
                                             de24 = :de24    
                                             WHERE id = :id";
     $id = 1;                                        
     $sql = $con-> prepare($consulta);
     $sql -> bindParam(':id', $id, PDO::PARAM_INT);
     $sql -> bindParam(':de1', $data['de1'], PDO::PARAM_STR);
     $sql -> bindParam(':de2', $data['de2'], PDO::PARAM_STR);
     $sql -> bindParam(':de3', $data['de3'], PDO::PARAM_STR);
     $sql -> bindParam(':de4', $data['de4'], PDO::PARAM_STR);
     $sql -> bindParam(':de5', $data['de5'], PDO::PARAM_STR);
     $sql -> bindParam(':de6', $data['de6'], PDO::PARAM_STR);
     $sql -> bindParam(':de7', $data['de7'], PDO::PARAM_STR);
     $sql -> bindParam(':de8', $data['de8'], PDO::PARAM_STR);
     $sql -> bindParam(':de9', $data['de9'], PDO::PARAM_STR);
     $sql -> bindParam(':de10', $data['de10'], PDO::PARAM_STR);
     $sql -> bindParam(':de11', $data['de11'], PDO::PARAM_STR);
     $sql -> bindParam(':de12', $data['de12'], PDO::PARAM_STR);
     $sql -> bindParam(':de13', $data['de13'], PDO::PARAM_STR);
     $sql -> bindParam(':de14', $data['de14'], PDO::PARAM_STR);
     $sql -> bindParam(':de15', $data['de15'], PDO::PARAM_STR);
     $sql -> bindParam(':de16', $data['de16'], PDO::PARAM_STR);
     $sql -> bindParam(':de17', $data['de17'], PDO::PARAM_STR);
     $sql -> bindParam(':de18', $data['de18'], PDO::PARAM_STR);
     $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
     $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
     $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
     $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
     $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
     $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
     
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

     //print_r($sql->errorInfo());
     return 0; 
     }
    }


    static public function updatePizarraOnce($data){
        $con = ConexionMysql::ConectarMysql();
        $consulta = "UPDATE pizarraonce SET de1 = :de1,
                                                de2 = :de2,
                                                de3 = :de3,
                                                de4 = :de4,
                                                de5 = :de5,
                                                de6 = :de6,
                                                de7 = :de7,
                                                de8 = :de8,
                                                de9 = :de9,
                                                de10 = :de10,
                                                de11 = :de11,
                                                de12 = :de12,
                                                de13 = :de13,
                                                de14 = :de14,
                                                de15 = :de15,
                                                de16 = :de16,
                                                de17 = :de17,
                                                de18 = :de18,
                                                de19 = :de19,
                                                de20 = :de20,
                                                de21 = :de21,
                                                de22 = :de22,
                                                de23 = :de23,
                                                de24 = :de24    
                                                WHERE id = :id";
        $id = 1;                                        
        $sql = $con-> prepare($consulta);
        $sql -> bindParam(':id', $id, PDO::PARAM_INT);
        $sql -> bindParam(':de1', $data['de1'], PDO::PARAM_STR);
        $sql -> bindParam(':de2', $data['de2'], PDO::PARAM_STR);
        $sql -> bindParam(':de3', $data['de3'], PDO::PARAM_STR);
        $sql -> bindParam(':de4', $data['de4'], PDO::PARAM_STR);
        $sql -> bindParam(':de5', $data['de5'], PDO::PARAM_STR);
        $sql -> bindParam(':de6', $data['de6'], PDO::PARAM_STR);
        $sql -> bindParam(':de7', $data['de7'], PDO::PARAM_STR);
        $sql -> bindParam(':de8', $data['de8'], PDO::PARAM_STR);
        $sql -> bindParam(':de9', $data['de9'], PDO::PARAM_STR);
        $sql -> bindParam(':de10', $data['de10'], PDO::PARAM_STR);
        $sql -> bindParam(':de11', $data['de11'], PDO::PARAM_STR);
        $sql -> bindParam(':de12', $data['de12'], PDO::PARAM_STR);
        $sql -> bindParam(':de13', $data['de13'], PDO::PARAM_STR);
        $sql -> bindParam(':de14', $data['de14'], PDO::PARAM_STR);
        $sql -> bindParam(':de15', $data['de15'], PDO::PARAM_STR);
        $sql -> bindParam(':de16', $data['de16'], PDO::PARAM_STR);
        $sql -> bindParam(':de17', $data['de17'], PDO::PARAM_STR);
        $sql -> bindParam(':de18', $data['de18'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        
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
   
        //print_r($sql->errorInfo());
        return 0; 
        }
       }


       static public function updatePizarraAlmuerzo($data){
        $con = ConexionMysql::ConectarMysql();
        $consulta = "UPDATE minutaalmuerzo SET de1 = :de1,
                                                de2 = :de2,
                                                de3 = :de3,
                                                de4 = :de4,
                                                de5 = :de5,
                                                de6 = :de6,
                                                de7 = :de7,
                                                de8 = :de8,
                                                de9 = :de9,
                                                de10 = :de10,
                                                de11 = :de11,
                                                de12 = :de12,
                                                de13 = :de13,
                                                de14 = :de14,
                                                de15 = :de15,
                                                de16 = :de16,
                                                de17 = :de17,
                                                de18 = :de18,
                                                de19 = :de19,
                                                de20 = :de20,
                                                de21 = :de21,
                                                de22 = :de22,
                                                de23 = :de23,
                                                de24 = :de24,
                                                de25 = :de25,
                                                de26 = :de26,
                                                de27 = :de27,
                                                de28 = :de28,
                                                de29 = :de29,
                                                de30 = :de30,
                                                de31 = :de31,
                                                de32 = :de32,
                                                de33 = :de33,
                                                de34 = :de34,
                                                de35 = :de35,
                                                de36 = :de36,
                                                de37 = :de37,
                                                de38 = :de38,
                                                de39 = :de39,
                                                de40 = :de40,
                                                de41 = :de41,
                                                de42 = :de42,
                                                de43 = :de43,
                                                de44 = :de44,
                                                de45 = :de45,
                                                de46 = :de46,
                                                de47 = :de47,
                                                de48 = :de48,
                                                de49 = :de49,
                                                de50 = :de50,
                                                de51 = :de51,
                                                de52 = :de52,
                                                de53 = :de53,
                                                de54 = :de54,
                                                de55 = :de55,
                                                de56 = :de56    
                                                WHERE id = :id";
        $id = 1;                                        
        $sql = $con-> prepare($consulta);
        $sql -> bindParam(':id', $id, PDO::PARAM_INT);
        $sql -> bindParam(':de1', $data['de1'], PDO::PARAM_STR);
        $sql -> bindParam(':de2', $data['de2'], PDO::PARAM_STR);
        $sql -> bindParam(':de3', $data['de3'], PDO::PARAM_STR);
        $sql -> bindParam(':de4', $data['de4'], PDO::PARAM_STR);
        $sql -> bindParam(':de5', $data['de5'], PDO::PARAM_STR);
        $sql -> bindParam(':de6', $data['de6'], PDO::PARAM_STR);
        $sql -> bindParam(':de7', $data['de7'], PDO::PARAM_STR);
        $sql -> bindParam(':de8', $data['de8'], PDO::PARAM_STR);
        $sql -> bindParam(':de9', $data['de9'], PDO::PARAM_STR);
        $sql -> bindParam(':de10', $data['de10'], PDO::PARAM_STR);
        $sql -> bindParam(':de11', $data['de11'], PDO::PARAM_STR);
        $sql -> bindParam(':de12', $data['de12'], PDO::PARAM_STR);
        $sql -> bindParam(':de13', $data['de13'], PDO::PARAM_STR);
        $sql -> bindParam(':de14', $data['de14'], PDO::PARAM_STR);
        $sql -> bindParam(':de15', $data['de15'], PDO::PARAM_STR);
        $sql -> bindParam(':de16', $data['de16'], PDO::PARAM_STR);
        $sql -> bindParam(':de17', $data['de17'], PDO::PARAM_STR);
        $sql -> bindParam(':de18', $data['de18'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        $sql -> bindParam(':de25', $data['de25'], PDO::PARAM_STR);
        $sql -> bindParam(':de26', $data['de26'], PDO::PARAM_STR);
        $sql -> bindParam(':de27', $data['de27'], PDO::PARAM_STR);
        $sql -> bindParam(':de28', $data['de28'], PDO::PARAM_STR);
        $sql -> bindParam(':de29', $data['de29'], PDO::PARAM_STR);
        $sql -> bindParam(':de30', $data['de30'], PDO::PARAM_STR);
        $sql -> bindParam(':de31', $data['de31'], PDO::PARAM_STR);
        $sql -> bindParam(':de32', $data['de32'], PDO::PARAM_STR);
        $sql -> bindParam(':de33', $data['de33'], PDO::PARAM_STR);
        $sql -> bindParam(':de34', $data['de34'], PDO::PARAM_STR);
        $sql -> bindParam(':de35', $data['de35'], PDO::PARAM_STR);
        $sql -> bindParam(':de36', $data['de36'], PDO::PARAM_STR);
        $sql -> bindParam(':de37', $data['de37'], PDO::PARAM_STR);
        $sql -> bindParam(':de38', $data['de38'], PDO::PARAM_STR);
        $sql -> bindParam(':de39', $data['de39'], PDO::PARAM_STR);
        $sql -> bindParam(':de40', $data['de40'], PDO::PARAM_STR);
        $sql -> bindParam(':de41', $data['de41'], PDO::PARAM_STR);
        $sql -> bindParam(':de42', $data['de42'], PDO::PARAM_STR);
        $sql -> bindParam(':de43', $data['de43'], PDO::PARAM_STR);
        $sql -> bindParam(':de44', $data['de44'], PDO::PARAM_STR);
        $sql -> bindParam(':de45', $data['de45'], PDO::PARAM_STR);
        $sql -> bindParam(':de46', $data['de46'], PDO::PARAM_STR);
        $sql -> bindParam(':de47', $data['de47'], PDO::PARAM_STR);
        $sql -> bindParam(':de48', $data['de48'], PDO::PARAM_STR);
        $sql -> bindParam(':de49', $data['de49'], PDO::PARAM_STR);
        $sql -> bindParam(':de50', $data['de50'], PDO::PARAM_STR);
        $sql -> bindParam(':de51', $data['de51'], PDO::PARAM_STR);
        $sql -> bindParam(':de52', $data['de52'], PDO::PARAM_STR);
        $sql -> bindParam(':de53', $data['de53'], PDO::PARAM_STR);
        $sql -> bindParam(':de54', $data['de54'], PDO::PARAM_STR);
        $sql -> bindParam(':de55', $data['de55'], PDO::PARAM_STR);
        $sql -> bindParam(':de56', $data['de56'], PDO::PARAM_STR);
        
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
   
        //print_r($sql->errorInfo());
        return 0; 
        }
       } 

       static public function updatePizarraCena($data){
        $con = ConexionMysql::ConectarMysql();
        $consulta = "UPDATE minutacena SET de1 = :de1,
                                                de2 = :de2,
                                                de3 = :de3,
                                                de4 = :de4,
                                                de5 = :de5,
                                                de6 = :de6,
                                                de7 = :de7,
                                                de8 = :de8,
                                                de9 = :de9,
                                                de10 = :de10,
                                                de11 = :de11,
                                                de12 = :de12,
                                                de13 = :de13,
                                                de14 = :de14,
                                                de15 = :de15,
                                                de16 = :de16,
                                                de17 = :de17,
                                                de18 = :de18,
                                                de19 = :de19,
                                                de20 = :de20,
                                                de21 = :de21,
                                                de22 = :de22,
                                                de23 = :de23,
                                                de24 = :de24,
                                                de25 = :de25,
                                                de26 = :de26,
                                                de27 = :de27,
                                                de28 = :de28,
                                                de29 = :de29,
                                                de30 = :de30,
                                                de31 = :de31,
                                                de32 = :de32,
                                                de33 = :de33,
                                                de34 = :de34,
                                                de35 = :de35,
                                                de36 = :de36,
                                                de37 = :de37,
                                                de38 = :de38,
                                                de39 = :de39,
                                                de40 = :de40,
                                                de41 = :de41,
                                                de42 = :de42,
                                                de43 = :de43,
                                                de44 = :de44,
                                                de45 = :de45,
                                                de46 = :de46,
                                                de47 = :de47,
                                                de48 = :de48,
                                                de49 = :de49,
                                                de50 = :de50,
                                                de51 = :de51,
                                                de52 = :de52,
                                                de53 = :de53,
                                                de54 = :de54,
                                                de55 = :de55,
                                                de56 = :de56    
                                                WHERE id = :id";
        $id = 1;                                        
        $sql = $con-> prepare($consulta);
        $sql -> bindParam(':id', $id, PDO::PARAM_INT);
        $sql -> bindParam(':de1', $data['de1'], PDO::PARAM_STR);
        $sql -> bindParam(':de2', $data['de2'], PDO::PARAM_STR);
        $sql -> bindParam(':de3', $data['de3'], PDO::PARAM_STR);
        $sql -> bindParam(':de4', $data['de4'], PDO::PARAM_STR);
        $sql -> bindParam(':de5', $data['de5'], PDO::PARAM_STR);
        $sql -> bindParam(':de6', $data['de6'], PDO::PARAM_STR);
        $sql -> bindParam(':de7', $data['de7'], PDO::PARAM_STR);
        $sql -> bindParam(':de8', $data['de8'], PDO::PARAM_STR);
        $sql -> bindParam(':de9', $data['de9'], PDO::PARAM_STR);
        $sql -> bindParam(':de10', $data['de10'], PDO::PARAM_STR);
        $sql -> bindParam(':de11', $data['de11'], PDO::PARAM_STR);
        $sql -> bindParam(':de12', $data['de12'], PDO::PARAM_STR);
        $sql -> bindParam(':de13', $data['de13'], PDO::PARAM_STR);
        $sql -> bindParam(':de14', $data['de14'], PDO::PARAM_STR);
        $sql -> bindParam(':de15', $data['de15'], PDO::PARAM_STR);
        $sql -> bindParam(':de16', $data['de16'], PDO::PARAM_STR);
        $sql -> bindParam(':de17', $data['de17'], PDO::PARAM_STR);
        $sql -> bindParam(':de18', $data['de18'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        $sql -> bindParam(':de25', $data['de25'], PDO::PARAM_STR);
        $sql -> bindParam(':de26', $data['de26'], PDO::PARAM_STR);
        $sql -> bindParam(':de27', $data['de27'], PDO::PARAM_STR);
        $sql -> bindParam(':de28', $data['de28'], PDO::PARAM_STR);
        $sql -> bindParam(':de29', $data['de29'], PDO::PARAM_STR);
        $sql -> bindParam(':de30', $data['de30'], PDO::PARAM_STR);
        $sql -> bindParam(':de31', $data['de31'], PDO::PARAM_STR);
        $sql -> bindParam(':de32', $data['de32'], PDO::PARAM_STR);
        $sql -> bindParam(':de33', $data['de33'], PDO::PARAM_STR);
        $sql -> bindParam(':de34', $data['de34'], PDO::PARAM_STR);
        $sql -> bindParam(':de35', $data['de35'], PDO::PARAM_STR);
        $sql -> bindParam(':de36', $data['de36'], PDO::PARAM_STR);
        $sql -> bindParam(':de37', $data['de37'], PDO::PARAM_STR);
        $sql -> bindParam(':de38', $data['de38'], PDO::PARAM_STR);
        $sql -> bindParam(':de39', $data['de39'], PDO::PARAM_STR);
        $sql -> bindParam(':de40', $data['de40'], PDO::PARAM_STR);
        $sql -> bindParam(':de41', $data['de41'], PDO::PARAM_STR);
        $sql -> bindParam(':de42', $data['de42'], PDO::PARAM_STR);
        $sql -> bindParam(':de43', $data['de43'], PDO::PARAM_STR);
        $sql -> bindParam(':de44', $data['de44'], PDO::PARAM_STR);
        $sql -> bindParam(':de45', $data['de45'], PDO::PARAM_STR);
        $sql -> bindParam(':de46', $data['de46'], PDO::PARAM_STR);
        $sql -> bindParam(':de47', $data['de47'], PDO::PARAM_STR);
        $sql -> bindParam(':de48', $data['de48'], PDO::PARAM_STR);
        $sql -> bindParam(':de49', $data['de49'], PDO::PARAM_STR);
        $sql -> bindParam(':de50', $data['de50'], PDO::PARAM_STR);
        $sql -> bindParam(':de51', $data['de51'], PDO::PARAM_STR);
        $sql -> bindParam(':de52', $data['de52'], PDO::PARAM_STR);
        $sql -> bindParam(':de53', $data['de53'], PDO::PARAM_STR);
        $sql -> bindParam(':de54', $data['de54'], PDO::PARAM_STR);
        $sql -> bindParam(':de55', $data['de55'], PDO::PARAM_STR);
        $sql -> bindParam(':de56', $data['de56'], PDO::PARAM_STR);
        
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
   
        //print_r($sql->errorInfo());
        return 0; 
        }
       } 

    static public function  viewPizarraOnce(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM pizarraonce"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
    }

    static public function  viewPizarraAlmuerzo(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM minutaalmuerzo"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
    }

    static public function  viewPizarraCena(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM minutacena"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
    }

    static public function  viewPizarraGigante(){

        $con = ConexionMysql::ConectarMysql();

        $sql = "SELECT * FROM minutagrande"; 
        $query = $con->prepare($sql); 
        $query -> execute(); 
        $results = $query -> fetchAll(PDO::FETCH_OBJ);
        if($query -> rowCount() > 0){

            return $results;
        }else{

            return 0;
        }
    }

    static public function updatePizarraGigante($data){
        $con = ConexionMysql::ConectarMysql();
        $consulta = "UPDATE minutagrande SET de1 = :de1,
                                                de2 = :de2,
                                                de3 = :de3,
                                                de4 = :de4,
                                                de5 = :de5,
                                                de6 = :de6,
                                                de7 = :de7,
                                                de8 = :de8,
                                                de9 = :de9,
                                                de10 = :de10,
                                                de11 = :de11,
                                                de12 = :de12,
                                                de13 = :de13,
                                                de14 = :de14,
                                                de15 = :de15,
                                                de16 = :de16,
                                                de17 = :de17,
                                                de18 = :de18,
                                                de19 = :de19,
                                                de20 = :de20,
                                                de21 = :de21,
                                                de22 = :de22,
                                                de23 = :de23,
                                                de24 = :de24,
                                                de25 = :de25,
                                                de26 = :de26,
                                                de27 = :de27,
                                                de28 = :de28,
                                                de29 = :de29,
                                                de30 = :de30,
                                                de31 = :de31,
                                                de32 = :de32,
                                                de33 = :de33,
                                                de34 = :de34,
                                                de35 = :de35,
                                                de36 = :de36,
                                                de37 = :de37,
                                                de38 = :de38,
                                                de39 = :de39,
                                                de40 = :de40,
                                                de41 = :de41,
                                                de42 = :de42,
                                                de43 = :de43,
                                                de44 = :de44,
                                                de45 = :de45,
                                                de46 = :de46,
                                                de47 = :de47,
                                                de48 = :de48,
                                                de49 = :de49,
                                                de50 = :de50,
                                                de51 = :de51,
                                                de52 = :de52,
                                                de53 = :de53,
                                                de54 = :de54,
                                                de55 = :de55,
                                                de56 = :de56,
                                                de57 = :de57,
                                                de58	=:de58	,
                                                de59	=:de59	,
                                                de60	=:de60	,
                                                de61	=:de61	,
                                                de62	=:de62	,
                                                de63	=:de63	,
                                                de64	=:de64	,
                                                de65	=:de65	,
                                                de66	=:de66	,
                                                de67	=:de67	,
                                                de68	=:de68	,
                                                de69	=:de69	,
                                                de70	=:de70	,
                                                de71	=:de71	,
                                                de72	=:de72	,
                                                de73	=:de73	,
                                                de74	=:de74	,
                                                de75	=:de75	,
                                                de76	=:de76	,
                                                de77	=:de77	,
                                                de78	=:de78	,
                                                de79	=:de79	,
                                                de80	=:de80	,
                                                de81	=:de81	,
                                                de82	=:de82	,
                                                de83	=:de83	,
                                                de84	=:de84	,
                                                de85	=:de85	,
                                                de86	=:de86	,
                                                de87	=:de87	,
                                                de88	=:de88	,
                                                de89	=:de89	,
                                                de90	=:de90	,
                                                de91	=:de91	,
                                                de92	=:de92	,
                                                de93	=:de93	,
                                                de94	=:de94	,
                                                de95	=:de95	,
                                                de96	=:de96	,
                                                de97	=:de97	,
                                                de98	=:de98	,
                                                de99	=:de99	,
                                                de100	=:de100	,
                                                de101	=:de101	,
                                                de102	=:de102	,
                                                de103	=:de103	,
                                                de104	=:de104	,
                                                de105	=:de105	,
                                                de106	=:de106	,
                                                de107	=:de107	,
                                                de108	=:de108	,
                                                de109	=:de109	,
                                                de110	=:de110	,
                                                de111	=:de111	,
                                                de112	=:de112	,
                                                de113	=:de113	,
                                                de114	=:de114	,
                                                de115	=:de115	,
                                                de116	=:de116	,
                                                de117	=:de117	,
                                                de118	=:de118	,
                                                de119	=:de119	,
                                                de120	=:de120	,
                                                de121	=:de121	,
                                                de122	=:de122	,
                                                de123	=:de123	,
                                                de124	=:de124	,
                                                de125	=:de125	,
                                                de126	=:de126	,
                                                de127	=:de127	,
                                                de128	=:de128	,
                                                de129	=:de129	,
                                                de130	=:de130	,
                                                de131	=:de131	,
                                                de132	=:de132	,
                                                de133	=:de133	,
                                                de134	=:de134	,
                                                de135	=:de135	,
                                                de136	=:de136	,
                                                de137	=:de137	,
                                                de138	=:de138	,
                                                de139	=:de139	,
                                                de140	=:de140	,
                                                de141	=:de141	,
                                                de142	=:de142	,
                                                de143	=:de143	,
                                                de144	=:de144	,
                                                de145	=:de145	,
                                                de146	=:de146	,
                                                de147	=:de147	,
                                                de148	=:de148	,
                                                de149	=:de149	,
                                                de150	=:de150	,
                                                de151	=:de151	,
                                                de152	=:de152	,
                                                de153	=:de153	,
                                                de154	=:de154	,
                                                de155	=:de155	,
                                                de156	=:de156	,
                                                de157	=:de157	,
                                                de158	=:de158	,
                                                de159	=:de159	,
                                                de160	=:de160	,
                                                de161	=:de161	,
                                                de162	=:de162	,
                                                de163	=:de163	,
                                                de164	=:de164	,
                                                de165	=:de165	,
                                                de166	=:de166	,
                                                de167	=:de167	,
                                                de168	=:de168	,
                                                de169	=:de169	,
                                                de170	=:de170	,
                                                de171	=:de171	,
                                                de172	=:de172	,
                                                de173	=:de173	,
                                                de174	=:de174	,
                                                de175	=:de175	,
                                                de176	=:de176	,
                                                de177	=:de177	,
                                                de178	=:de178	,
                                                de179	=:de179	,
                                                de180	=:de180	,
                                                de181	=:de181	,
                                                de182	=:de182	,
                                                de183	=:de183	,
                                                de184	=:de184	
                                                    
                                                WHERE id = :id";
        $id = 1;                                        
        $sql = $con-> prepare($consulta);
        $sql -> bindParam(':id', $id, PDO::PARAM_INT);
        $sql -> bindParam(':de1', $data['de1'], PDO::PARAM_STR);
        $sql -> bindParam(':de2', $data['de2'], PDO::PARAM_STR);
        $sql -> bindParam(':de3', $data['de3'], PDO::PARAM_STR);
        $sql -> bindParam(':de4', $data['de4'], PDO::PARAM_STR);
        $sql -> bindParam(':de5', $data['de5'], PDO::PARAM_STR);
        $sql -> bindParam(':de6', $data['de6'], PDO::PARAM_STR);
        $sql -> bindParam(':de7', $data['de7'], PDO::PARAM_STR);
        $sql -> bindParam(':de8', $data['de8'], PDO::PARAM_STR);
        $sql -> bindParam(':de9', $data['de9'], PDO::PARAM_STR);
        $sql -> bindParam(':de10', $data['de10'], PDO::PARAM_STR);
        $sql -> bindParam(':de11', $data['de11'], PDO::PARAM_STR);
        $sql -> bindParam(':de12', $data['de12'], PDO::PARAM_STR);
        $sql -> bindParam(':de13', $data['de13'], PDO::PARAM_STR);
        $sql -> bindParam(':de14', $data['de14'], PDO::PARAM_STR);
        $sql -> bindParam(':de15', $data['de15'], PDO::PARAM_STR);
        $sql -> bindParam(':de16', $data['de16'], PDO::PARAM_STR);
        $sql -> bindParam(':de17', $data['de17'], PDO::PARAM_STR);
        $sql -> bindParam(':de18', $data['de18'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        $sql -> bindParam(':de19', $data['de19'], PDO::PARAM_STR);
        $sql -> bindParam(':de20', $data['de20'], PDO::PARAM_STR);
        $sql -> bindParam(':de21', $data['de21'], PDO::PARAM_STR);
        $sql -> bindParam(':de22', $data['de22'], PDO::PARAM_STR);
        $sql -> bindParam(':de23', $data['de23'], PDO::PARAM_STR);
        $sql -> bindParam(':de24', $data['de24'], PDO::PARAM_STR);
        $sql -> bindParam(':de25', $data['de25'], PDO::PARAM_STR);
        $sql -> bindParam(':de26', $data['de26'], PDO::PARAM_STR);
        $sql -> bindParam(':de27', $data['de27'], PDO::PARAM_STR);
        $sql -> bindParam(':de28', $data['de28'], PDO::PARAM_STR);
        $sql -> bindParam(':de29', $data['de29'], PDO::PARAM_STR);
        $sql -> bindParam(':de30', $data['de30'], PDO::PARAM_STR);
        $sql -> bindParam(':de31', $data['de31'], PDO::PARAM_STR);
        $sql -> bindParam(':de32', $data['de32'], PDO::PARAM_STR);
        $sql -> bindParam(':de33', $data['de33'], PDO::PARAM_STR);
        $sql -> bindParam(':de34', $data['de34'], PDO::PARAM_STR);
        $sql -> bindParam(':de35', $data['de35'], PDO::PARAM_STR);
        $sql -> bindParam(':de36', $data['de36'], PDO::PARAM_STR);
        $sql -> bindParam(':de37', $data['de37'], PDO::PARAM_STR);
        $sql -> bindParam(':de38', $data['de38'], PDO::PARAM_STR);
        $sql -> bindParam(':de39', $data['de39'], PDO::PARAM_STR);
        $sql -> bindParam(':de40', $data['de40'], PDO::PARAM_STR);
        $sql -> bindParam(':de41', $data['de41'], PDO::PARAM_STR);
        $sql -> bindParam(':de42', $data['de42'], PDO::PARAM_STR);
        $sql -> bindParam(':de43', $data['de43'], PDO::PARAM_STR);
        $sql -> bindParam(':de44', $data['de44'], PDO::PARAM_STR);
        $sql -> bindParam(':de45', $data['de45'], PDO::PARAM_STR);
        $sql -> bindParam(':de46', $data['de46'], PDO::PARAM_STR);
        $sql -> bindParam(':de47', $data['de47'], PDO::PARAM_STR);
        $sql -> bindParam(':de48', $data['de48'], PDO::PARAM_STR);
        $sql -> bindParam(':de49', $data['de49'], PDO::PARAM_STR);
        $sql -> bindParam(':de50', $data['de50'], PDO::PARAM_STR);
        $sql -> bindParam(':de51', $data['de51'], PDO::PARAM_STR);
        $sql -> bindParam(':de52', $data['de52'], PDO::PARAM_STR);
        $sql -> bindParam(':de53', $data['de53'], PDO::PARAM_STR);
        $sql -> bindParam(':de54', $data['de54'], PDO::PARAM_STR);
        $sql -> bindParam(':de55', $data['de55'], PDO::PARAM_STR);
        $sql -> bindParam(':de56', $data['de56'], PDO::PARAM_STR);
        $sql -> bindParam(':de57', $data['de57'], PDO::PARAM_STR);
        $sql -> bindParam(':de58', $data['de58'], PDO::PARAM_STR);
        $sql -> bindParam(':de59', $data['de59'], PDO::PARAM_STR);
        $sql -> bindParam(':de60', $data['de60'], PDO::PARAM_STR);

        $sql -> bindParam(':de61', $data['de61'], PDO::PARAM_STR);
        $sql -> bindParam(':de62', $data['de62'], PDO::PARAM_STR);
        $sql -> bindParam(':de63', $data['de63'], PDO::PARAM_STR);
        $sql -> bindParam(':de64', $data['de64'], PDO::PARAM_STR);
        $sql -> bindParam(':de65', $data['de65'], PDO::PARAM_STR);
        $sql -> bindParam(':de66', $data['de66'], PDO::PARAM_STR);
        $sql -> bindParam(':de67', $data['de67'], PDO::PARAM_STR);
        $sql -> bindParam(':de68', $data['de68'], PDO::PARAM_STR);
        $sql -> bindParam(':de69', $data['de69'], PDO::PARAM_STR);

        $sql -> bindParam(':de70', $data['de70'], PDO::PARAM_STR);
        $sql -> bindParam(':de71', $data['de71'], PDO::PARAM_STR);
        $sql -> bindParam(':de72', $data['de72'], PDO::PARAM_STR);
        $sql -> bindParam(':de73', $data['de73'], PDO::PARAM_STR);
        $sql -> bindParam(':de74', $data['de74'], PDO::PARAM_STR);
        $sql -> bindParam(':de75', $data['de75'], PDO::PARAM_STR);
        $sql -> bindParam(':de76', $data['de76'], PDO::PARAM_STR);
        $sql -> bindParam(':de77', $data['de77'], PDO::PARAM_STR);
        $sql -> bindParam(':de78', $data['de78'], PDO::PARAM_STR);
        $sql -> bindParam(':de79', $data['de79'], PDO::PARAM_STR);
       
        $sql -> bindParam(':de80', $data['de80'], PDO::PARAM_STR);
        $sql -> bindParam(':de81', $data['de81'], PDO::PARAM_STR);
        $sql -> bindParam(':de82', $data['de82'], PDO::PARAM_STR);
        $sql -> bindParam(':de83', $data['de83'], PDO::PARAM_STR);
        $sql -> bindParam(':de84', $data['de84'], PDO::PARAM_STR);
        $sql -> bindParam(':de85', $data['de85'], PDO::PARAM_STR);
        $sql -> bindParam(':de86', $data['de86'], PDO::PARAM_STR);
        $sql -> bindParam(':de87', $data['de87'], PDO::PARAM_STR);
        $sql -> bindParam(':de88', $data['de88'], PDO::PARAM_STR);
        $sql -> bindParam(':de89', $data['de89'], PDO::PARAM_STR);
      

        $sql -> bindParam(':de90', $data['de90'], PDO::PARAM_STR);
        $sql -> bindParam(':de91', $data['de91'], PDO::PARAM_STR);
        $sql -> bindParam(':de92', $data['de92'], PDO::PARAM_STR);
        $sql -> bindParam(':de93', $data['de93'], PDO::PARAM_STR);
        $sql -> bindParam(':de94', $data['de94'], PDO::PARAM_STR);
        $sql -> bindParam(':de95', $data['de95'], PDO::PARAM_STR);
        $sql -> bindParam(':de96', $data['de96'], PDO::PARAM_STR);
        $sql -> bindParam(':de97', $data['de97'], PDO::PARAM_STR);
        $sql -> bindParam(':de98', $data['de98'], PDO::PARAM_STR);
        $sql -> bindParam(':de99', $data['de99'], PDO::PARAM_STR);

        $sql -> bindParam(':de100', $data['de100'], PDO::PARAM_STR);
        $sql -> bindParam(':de101', $data['de101'], PDO::PARAM_STR);
        $sql -> bindParam(':de102', $data['de102'], PDO::PARAM_STR);
        $sql -> bindParam(':de103', $data['de103'], PDO::PARAM_STR);
        $sql -> bindParam(':de104', $data['de104'], PDO::PARAM_STR);
        $sql -> bindParam(':de105', $data['de105'], PDO::PARAM_STR);
        $sql -> bindParam(':de106', $data['de106'], PDO::PARAM_STR);
        $sql -> bindParam(':de107', $data['de107'], PDO::PARAM_STR);
        $sql -> bindParam(':de108', $data['de108'], PDO::PARAM_STR);
        $sql -> bindParam(':de109', $data['de109'], PDO::PARAM_STR);

        $sql -> bindParam(':de110', $data['de110'], PDO::PARAM_STR);
        $sql -> bindParam(':de111', $data['de111'], PDO::PARAM_STR);
        $sql -> bindParam(':de112', $data['de112'], PDO::PARAM_STR);
        $sql -> bindParam(':de113', $data['de113'], PDO::PARAM_STR);
        $sql -> bindParam(':de114', $data['de114'], PDO::PARAM_STR);
        $sql -> bindParam(':de115', $data['de115'], PDO::PARAM_STR);
        $sql -> bindParam(':de116', $data['de116'], PDO::PARAM_STR);
        $sql -> bindParam(':de117', $data['de117'], PDO::PARAM_STR);
        $sql -> bindParam(':de118', $data['de118'], PDO::PARAM_STR);
        $sql -> bindParam(':de119', $data['de119'], PDO::PARAM_STR);

        $sql -> bindParam(':de120', $data['de120'], PDO::PARAM_STR);
        $sql -> bindParam(':de121', $data['de121'], PDO::PARAM_STR);
        $sql -> bindParam(':de122', $data['de122'], PDO::PARAM_STR);
        $sql -> bindParam(':de123', $data['de123'], PDO::PARAM_STR);
        $sql -> bindParam(':de124', $data['de124'], PDO::PARAM_STR);
        $sql -> bindParam(':de125', $data['de125'], PDO::PARAM_STR);
        $sql -> bindParam(':de126', $data['de126'], PDO::PARAM_STR);
        $sql -> bindParam(':de127', $data['de127'], PDO::PARAM_STR);
        $sql -> bindParam(':de128', $data['de128'], PDO::PARAM_STR);
        $sql -> bindParam(':de129', $data['de129'], PDO::PARAM_STR);

        $sql -> bindParam(':de130', $data['de130'], PDO::PARAM_STR);
        $sql -> bindParam(':de131', $data['de131'], PDO::PARAM_STR);
        $sql -> bindParam(':de132', $data['de132'], PDO::PARAM_STR);
        $sql -> bindParam(':de133', $data['de133'], PDO::PARAM_STR);
        $sql -> bindParam(':de134', $data['de134'], PDO::PARAM_STR);
        $sql -> bindParam(':de135', $data['de135'], PDO::PARAM_STR);
        $sql -> bindParam(':de136', $data['de136'], PDO::PARAM_STR);
        $sql -> bindParam(':de137', $data['de137'], PDO::PARAM_STR);
        $sql -> bindParam(':de138', $data['de138'], PDO::PARAM_STR);
        $sql -> bindParam(':de139', $data['de139'], PDO::PARAM_STR);

        $sql -> bindParam(':de140', $data['de140'], PDO::PARAM_STR);
        $sql -> bindParam(':de141', $data['de141'], PDO::PARAM_STR);
        $sql -> bindParam(':de142', $data['de142'], PDO::PARAM_STR);
        $sql -> bindParam(':de143', $data['de143'], PDO::PARAM_STR);
        $sql -> bindParam(':de144', $data['de144'], PDO::PARAM_STR);
        $sql -> bindParam(':de145', $data['de145'], PDO::PARAM_STR);
        $sql -> bindParam(':de146', $data['de146'], PDO::PARAM_STR);
        $sql -> bindParam(':de147', $data['de147'], PDO::PARAM_STR);
        $sql -> bindParam(':de148', $data['de148'], PDO::PARAM_STR);
        $sql -> bindParam(':de149', $data['de149'], PDO::PARAM_STR);

        $sql -> bindParam(':de150', $data['de150'], PDO::PARAM_STR);
        $sql -> bindParam(':de151', $data['de151'], PDO::PARAM_STR);
        $sql -> bindParam(':de152', $data['de152'], PDO::PARAM_STR);
        $sql -> bindParam(':de153', $data['de153'], PDO::PARAM_STR);
        $sql -> bindParam(':de154', $data['de154'], PDO::PARAM_STR);
        $sql -> bindParam(':de155', $data['de155'], PDO::PARAM_STR);
        $sql -> bindParam(':de156', $data['de156'], PDO::PARAM_STR);
        $sql -> bindParam(':de157', $data['de157'], PDO::PARAM_STR);
        $sql -> bindParam(':de158', $data['de158'], PDO::PARAM_STR);
        $sql -> bindParam(':de159', $data['de159'], PDO::PARAM_STR);

        $sql -> bindParam(':de160', $data['de160'], PDO::PARAM_STR);
        $sql -> bindParam(':de161', $data['de161'], PDO::PARAM_STR);
        $sql -> bindParam(':de162', $data['de162'], PDO::PARAM_STR);
        $sql -> bindParam(':de163', $data['de163'], PDO::PARAM_STR);
        $sql -> bindParam(':de164', $data['de164'], PDO::PARAM_STR);
        $sql -> bindParam(':de165', $data['de165'], PDO::PARAM_STR);
        $sql -> bindParam(':de166', $data['de166'], PDO::PARAM_STR);
        $sql -> bindParam(':de167', $data['de167'], PDO::PARAM_STR);
        $sql -> bindParam(':de168', $data['de168'], PDO::PARAM_STR);
        $sql -> bindParam(':de169', $data['de169'], PDO::PARAM_STR);

        $sql -> bindParam(':de170', $data['de170'], PDO::PARAM_STR);
        $sql -> bindParam(':de171', $data['de171'], PDO::PARAM_STR);
        $sql -> bindParam(':de172', $data['de172'], PDO::PARAM_STR);
        $sql -> bindParam(':de173', $data['de173'], PDO::PARAM_STR);
        $sql -> bindParam(':de174', $data['de174'], PDO::PARAM_STR);
        $sql -> bindParam(':de175', $data['de175'], PDO::PARAM_STR);
        $sql -> bindParam(':de176', $data['de176'], PDO::PARAM_STR);
        $sql -> bindParam(':de177', $data['de177'], PDO::PARAM_STR);
        $sql -> bindParam(':de178', $data['de178'], PDO::PARAM_STR);
        $sql -> bindParam(':de179', $data['de179'], PDO::PARAM_STR);
        $sql -> bindParam(':de180', $data['de180'], PDO::PARAM_STR);

        $sql -> bindParam(':de181', $data['de181'], PDO::PARAM_STR);
        $sql -> bindParam(':de182', $data['de182'], PDO::PARAM_STR);
        $sql -> bindParam(':de183', $data['de183'], PDO::PARAM_STR);
        $sql -> bindParam(':de184', $data['de184'], PDO::PARAM_STR);

        
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
   
        //print_r($sql->errorInfo());
        return 0; 
        }
       } 
    
}