<?php
include_once (dirname(__DIR__).'/config.php');
//include (CONTROLLER_PATH."flotasController.php");
include (MODELO_PATH."pizarraModelo.php");

class pizarraControlador
{

    static public function viewPizarraDesayuno(){


        $pizarra = pizarraModelo::viewPizarraDesayuno();

        foreach($pizarra as $piz){

            $data = array(
                "de1" => $piz->de1,
                "de2" => $piz->de2,
                "de3" => $piz->de3,
                "de4" => $piz->de4,
                "de5" => $piz->de5,
                "de6" => $piz->de6,
                "de7" => $piz->de7,
                "de8" => $piz->de8,
                "de9" => $piz->de9,
                "de10" => $piz->de10,
                "de11" => $piz->de11,
                "de12" => $piz->de12,
                "de13" => $piz->de13,
                "de14" => $piz->de14,
                "de15" => $piz->de15,
                "de16" => $piz->de16,
                "de17" => $piz->de17,
                "de18" => $piz->de18,
                "de19" => $piz->de19,
                "de20" => $piz->de20,
                "de21" => $piz->de21,
                "de22" => $piz->de22,
                "de23" => $piz->de23,
                "de24" => $piz->de24
            );


        }
         return $data;

    }

    static public function viewPizarraOnce(){


        $pizarra = pizarraModelo::viewPizarraOnce();
        
        foreach($pizarra as $piz){

            $data = array(
                "de1" => $piz->de1,
                "de2" => $piz->de2,
                "de3" => $piz->de3,
                "de4" => $piz->de4,
                "de5" => $piz->de5,
                "de6" => $piz->de6,
                "de7" => $piz->de7,
                "de8" => $piz->de8,
                "de9" => $piz->de9,
                "de10" => $piz->de10,
                "de11" => $piz->de11,
                "de12" => $piz->de12,
                "de13" => $piz->de13,
                "de14" => $piz->de14,
                "de15" => $piz->de15,
                "de16" => $piz->de16,
                "de17" => $piz->de17,
                "de18" => $piz->de18,
                "de19" => $piz->de19,
                "de20" => $piz->de20,
                "de21" => $piz->de21,
                "de22" => $piz->de22,
                "de23" => $piz->de23,
                "de24" => $piz->de24
            );


        }
         return $data;

    }

    static public function viewPizarraAlmuerzo(){


        $pizarra = pizarraModelo::viewPizarraAlmuerzo();
        
        foreach($pizarra as $piz){

            $data = array(
                "de1" => $piz->de1,
                "de2" => $piz->de2,
                "de3" => $piz->de3,
                "de4" => $piz->de4,
                "de5" => $piz->de5,
                "de6" => $piz->de6,
                "de7" => $piz->de7,
                "de8" => $piz->de8,
                "de9" => $piz->de9,
                "de10" => $piz->de10,
                "de11" => $piz->de11,
                "de12" => $piz->de12,
                "de13" => $piz->de13,
                "de14" => $piz->de14,
                "de15" => $piz->de15,
                "de16" => $piz->de16,
                "de17" => $piz->de17,
                "de18" => $piz->de18,
                "de19" => $piz->de19,
                "de20" => $piz->de20,
                "de21" => $piz->de21,
                "de22" => $piz->de22,
                "de23" => $piz->de23,
                "de24" => $piz->de24,
                "de25" => $piz->de25,
                "de26" => $piz->de26,
                "de27" => $piz->de27,
                "de28" => $piz->de28,
                "de29" => $piz->de29,
                "de30" => $piz->de30,
                "de31" => $piz->de31,
                "de32" => $piz->de32,
                "de33" => $piz->de33,
                "de34" => $piz->de34,
                "de35" => $piz->de35,
                "de36" => $piz->de36,
                "de37" => $piz->de37,
                "de38" => $piz->de39,
                "de39" => $piz->de39,
                "de40" => $piz->de40,
                "de41" => $piz->de41,
                "de42" => $piz->de42,
                "de43" => $piz->de43,
                "de44" => $piz->de44,
                "de45" => $piz->de45,
                "de46" => $piz->de46,
                "de47" => $piz->de47,
                "de48" => $piz->de48,
                "de49" => $piz->de49,
                "de50" => $piz->de50,
                "de51" => $piz->de51,
                "de52" => $piz->de52,
                "de53" => $piz->de53,
                "de54" => $piz->de54,
                "de55" => $piz->de55,
                "de56" => $piz->de56,
            );


        }
         return $data;

    }

    static public function viewPizarraCena(){


        $pizarra = pizarraModelo::viewPizarraCena();
        
        foreach($pizarra as $piz){

            $data = array(
                "de1" => $piz->de1,
                "de2" => $piz->de2,
                "de3" => $piz->de3,
                "de4" => $piz->de4,
                "de5" => $piz->de5,
                "de6" => $piz->de6,
                "de7" => $piz->de7,
                "de8" => $piz->de8,
                "de9" => $piz->de9,
                "de10" => $piz->de10,
                "de11" => $piz->de11,
                "de12" => $piz->de12,
                "de13" => $piz->de13,
                "de14" => $piz->de14,
                "de15" => $piz->de15,
                "de16" => $piz->de16,
                "de17" => $piz->de17,
                "de18" => $piz->de18,
                "de19" => $piz->de19,
                "de20" => $piz->de20,
                "de21" => $piz->de21,
                "de22" => $piz->de22,
                "de23" => $piz->de23,
                "de24" => $piz->de24,
                "de25" => $piz->de25,
                "de26" => $piz->de26,
                "de27" => $piz->de27,
                "de28" => $piz->de28,
                "de29" => $piz->de29,
                "de30" => $piz->de30,
                "de31" => $piz->de31,
                "de32" => $piz->de32,
                "de33" => $piz->de33,
                "de34" => $piz->de34,
                "de35" => $piz->de35,
                "de36" => $piz->de36,
                "de37" => $piz->de37,
                "de38" => $piz->de39,
                "de39" => $piz->de39,
                "de40" => $piz->de40,
                "de41" => $piz->de41,
                "de42" => $piz->de42,
                "de43" => $piz->de43,
                "de44" => $piz->de44,
                "de45" => $piz->de45,
                "de46" => $piz->de46,
                "de47" => $piz->de47,
                "de48" => $piz->de48,
                "de49" => $piz->de49,
                "de50" => $piz->de50,
                "de51" => $piz->de51,
                "de52" => $piz->de52,
                "de53" => $piz->de53,
                "de54" => $piz->de54,
                "de55" => $piz->de55,
                "de56" => $piz->de56,
            );


        }
         return $data;

    }

    static public function updatePizarraDesayuno($data){

        $desa = pizarraModelo::updatePizarraDesayuno($data);
        return $desa;
    }

    static public function updatePizarraOnce($data){

        $desa = pizarraModelo::updatePizarraOnce($data);
        return $desa;
    }
    static public function updatePizarraAlmuerzo($data){

        $desa = pizarraModelo::updatePizarraAlmuerzo($data);
        return $desa;
    }

    static public function updatePizarraCena($data){

        $desa = pizarraModelo::updatePizarraCena($data);
        return $desa;
    }

    static public function updatePizarraGigante($data){

        $desa = pizarraModelo::updatePizarraGigante($data);
        return $desa;
    }
    static public function viewPizarraGigante(){

        $desa = pizarraModelo::viewPizarraGigante();

        foreach($desa as $piz){

            $data = array(
                "de1" => $piz->de1,
                "de2" => $piz->de2,
                "de3" => $piz->de3,
                "de4" => $piz->de4,
                "de5" => $piz->de5,
                "de6" => $piz->de6,
                "de7" => $piz->de7,
                "de8" => $piz->de8,
                "de9" => $piz->de9,
                "de10" => $piz->de10,
                "de11" => $piz->de11,
                "de12" => $piz->de12,
                "de13" => $piz->de13,
                "de14" => $piz->de14,
                "de15" => $piz->de15,
                "de16" => $piz->de16,
                "de17" => $piz->de17,
                "de18" => $piz->de18,
                "de19" => $piz->de19,
                "de20" => $piz->de20,
                "de21" => $piz->de21,
                "de22" => $piz->de22,
                "de23" => $piz->de23,
                "de24" => $piz->de24,
                "de25" => $piz->de25,
                "de26" => $piz->de26,
                "de27" => $piz->de27,
                "de28" => $piz->de28,
                "de29" => $piz->de29,
                "de30" => $piz->de30,
                "de31" => $piz->de31,
                "de32" => $piz->de32,
                "de33" => $piz->de33,
                "de34" => $piz->de34,
                "de35" => $piz->de35,
                "de36" => $piz->de36,
                "de37" => $piz->de37,
                "de38" => $piz->de39,
                "de39" => $piz->de39,
                "de40" => $piz->de40,
                "de41" => $piz->de41,
                "de42" => $piz->de42,
                "de43" => $piz->de43,
                "de44" => $piz->de44,
                "de45" => $piz->de45,
                "de46" => $piz->de46,
                "de47" => $piz->de47,
                "de48" => $piz->de48,
                "de49" => $piz->de49,
                "de50" => $piz->de50,
                "de51" => $piz->de51,
                "de52" => $piz->de52,
                "de53" => $piz->de53,
                "de54" => $piz->de54,
                "de55" => $piz->de55,
                "de56" => $piz->de56,
                "de57" => $piz->de57,
                "de58" => $piz->de58,
                "de59" => $piz->de59,
                "de60" => $piz->de60,
                "de61"=> $piz->de61,
                "de62"=> $piz->de62,
                "de63"=> $piz->de63,
                "de64"=> $piz->de64,
                "de65"=> $piz->de65,
                "de66"=> $piz->de66,
                "de67"=> $piz->de67,
                "de68"=> $piz->de68,
                "de69"=> $piz->de69,
                "de70"=> $piz->de70,
                "de71"=> $piz->de71,
                "de72"=> $piz->de72,
                "de73"=> $piz->de73,
                "de74"=> $piz->de74,
                "de75"=> $piz->de75,
                "de76"=> $piz->de76,
                "de77"=> $piz->de77,
                "de78"=> $piz->de78,
                "de79"=> $piz->de79,
                "de80"=> $piz->de80,
                "de81"=> $piz->de81,
                "de82"=> $piz->de82,
                "de83"=> $piz->de83,
                "de84"=> $piz->de84,
                "de85"=> $piz->de85,
                "de86"=> $piz->de86,
                "de87"=> $piz->de87,
                "de88"=> $piz->de88,
                "de89"=> $piz->de89,
                "de90"=> $piz->de90,
                "de91"=> $piz->de91,
                "de92"=> $piz->de92,
                "de93"=> $piz->de93,
                "de94"=> $piz->de94,
                "de95"=> $piz->de95,
                "de96"=> $piz->de96,
                "de97"=> $piz->de97,
                "de98"=> $piz->de98,
                "de99"=> $piz->de99,
                "de100"=> $piz->de100,
                "de101"=> $piz->de101,
                "de102"=> $piz->de102,
                "de103"=> $piz->de103,
                "de104"=> $piz->de104,
                "de105"=> $piz->de105,
                "de106"=> $piz->de106,
                "de107"=> $piz->de107,
                "de108"=> $piz->de108,
                "de109"=> $piz->de109,
                "de110"=> $piz->de110,
                "de111"=> $piz->de111,
                "de112"=> $piz->de112,
                "de113"=> $piz->de113,
                "de114"=> $piz->de114,
                "de115"=> $piz->de115,
                "de116"=> $piz->de116,
                "de117"=> $piz->de117,
                "de118"=> $piz->de118,
                "de119"=> $piz->de119,
                "de120"=> $piz->de120,
                "de121"=> $piz->de121,
                "de122"=> $piz->de122,
                "de123"=> $piz->de123,
                "de124"=> $piz->de124,
                "de125"=> $piz->de125,
                "de126"=> $piz->de126,
                "de127"=> $piz->de127,
                "de128"=> $piz->de128,
                "de129"=> $piz->de129,
                "de130"=> $piz->de130,
                "de131"=> $piz->de131,
                "de132"=> $piz->de132,
                "de133"=> $piz->de133,
                "de134"=> $piz->de134,
                "de135"=> $piz->de135,
                "de136"=> $piz->de136,
                "de137"=> $piz->de137,
                "de138"=> $piz->de138,
                "de139"=> $piz->de139,
                "de140"=> $piz->de140,
                "de141"=> $piz->de141,
                "de142"=> $piz->de142,
                "de143"=> $piz->de143,
                "de144"=> $piz->de144,
                "de145"=> $piz->de145,
                "de146"=> $piz->de146,
                "de147"=> $piz->de147,
                "de148"=> $piz->de148,
                "de149"=> $piz->de149,
                "de150"=> $piz->de150,
                "de151"=> $piz->de151,
                "de152"=> $piz->de152,
                "de153"=> $piz->de153,
                "de154"=> $piz->de154,
                "de155"=> $piz->de155,
                "de156"=> $piz->de156,
                "de157"=> $piz->de157,
                "de158"=> $piz->de158,
                "de159"=> $piz->de159,
                "de160"=> $piz->de160,
                "de161"=> $piz->de161,
                "de162"=> $piz->de162,
                "de163"=> $piz->de163,
                "de164"=> $piz->de164,
                "de165"=> $piz->de165,
                "de166"=> $piz->de166,
                "de167"=> $piz->de167,
                "de168"=> $piz->de168,
                "de169"=> $piz->de169,
                "de170"=> $piz->de170,
                "de171"=> $piz->de171,
                "de172"=> $piz->de172,
                "de173"=> $piz->de173,
                "de174"=> $piz->de174,
                "de175"=> $piz->de175,
                "de176"=> $piz->de176,
                "de177"=> $piz->de177,
                "de178"=> $piz->de178,
                "de179"=> $piz->de179,
                "de180"=> $piz->de180,
                "de181"=> $piz->de181,
                "de182"=> $piz->de182,
                "de183"=> $piz->de183,
                "de184"	=> $piz->de184

                
            );


        }
         return $data;
      
    }
    
    
}

if(isset($_POST['updatedesayuno'])){

    $desa = pizarraControlador::updatePizarraDesayuno($_POST);



    if($desa == 1){
        $mensaje = 'Pizarra actualizada exitosamente';

        $resultado = array(
            "estado" => 1,
            "mensaje" => $mensaje
        
        );
    }else{
        $mensaje = 'Problemas actualizando pizarra';
        
        $resultado = array(
            "estado" => 0,
            "mensaje" => $mensaje
        
        );
    }

  
    echo json_encode($resultado); 
    
    }


    if(isset($_POST['updateonce'])){

        $desa = pizarraControlador::updatePizarraOnce($_POST);
    
    
    
        if($desa == 1){
            $mensaje = 'Pizarra actualizada exitosamente';
    
            $resultado = array(
                "estado" => 1,
                "mensaje" => $mensaje
            
            );
        }else{
            $mensaje = 'Problemas actualizando pizarra';
            
            $resultado = array(
                "estado" => 0,
                "mensaje" => $mensaje
            
            );
        }
    
      
        echo json_encode($resultado); 
        
        }

        if(isset($_POST['updatealmuerzo'])){

            $desa = pizarraControlador::updatePizarraAlmuerzo($_POST);
        
        
        
            if($desa == 1){
                $mensaje = 'Pizarra actualizada exitosamente';
        
                $resultado = array(
                    "estado" => 1,
                    "mensaje" => $mensaje
                
                );
            }else{
                $mensaje = 'Problemas actualizando pizarra';
                
                $resultado = array(
                    "estado" => 0,
                    "mensaje" => $mensaje
                
                );
            }
        
          
            echo json_encode($resultado); 
            
            }
            if(isset($_POST['updatecena'])){

                $desa = pizarraControlador::updatePizarraCena($_POST);
            
            
            
                if($desa == 1){
                    $mensaje = 'Pizarra actualizada exitosamente';
            
                    $resultado = array(
                        "estado" => 1,
                        "mensaje" => $mensaje
                    
                    );
                }else{
                    $mensaje = 'Problemas actualizando pizarra';
                    
                    $resultado = array(
                        "estado" => 0,
                        "mensaje" => $mensaje
                    
                    );
                }
            
              
                echo json_encode($resultado); 
                
                }



                if(isset($_POST['desayunomin'])){

                    $desa = pizarraControlador::updatePizarraCena($_POST);
                
                
                
                    if($desa == 1){
                        $mensaje = 'Pizarra actualizada exitosamente';
                
                        $resultado = array(
                            "estado" => 1,
                            "mensaje" => $mensaje
                        
                        );
                    }else{
                        $mensaje = 'Problemas actualizando pizarra';
                        
                        $resultado = array(
                            "estado" => 0,
                            "mensaje" => $mensaje
                        
                        );
                    }
                
                  
                    echo json_encode($resultado); 
                    
                    }



                    if(isset($_POST['oncemin'])){

                        $desa = pizarraControlador::updatePizarraCena($_POST);
                    
                    
                    
                        if($desa == 1){
                            $mensaje = 'Pizarra actualizada exitosamente';
                    
                            $resultado = array(
                                "estado" => 1,
                                "mensaje" => $mensaje
                            
                            );
                        }else{
                            $mensaje = 'Problemas actualizando pizarra';
                            
                            $resultado = array(
                                "estado" => 0,
                                "mensaje" => $mensaje
                            
                            );
                        }
                    
                      
                        echo json_encode($resultado); 
                        
                        }

                        if(isset($_POST['minGrande'])){

                            $desa = pizarraControlador::updatePizarraGigante($_POST);
                        
                        
                        
                            if($desa == 1){
                                $mensaje = 'Pizarra actualizada exitosamente';
                        
                                $resultado = array(
                                    "estado" => 1,
                                    "mensaje" => $mensaje
                                
                                );
                            }else{
                                $mensaje = 'Problemas actualizando pizarra';
                                
                                $resultado = array(
                                    "estado" => 0,
                                    "mensaje" => $mensaje
                                
                                );
                            }
                        
                          
                            echo json_encode($resultado); 
                            
                            }