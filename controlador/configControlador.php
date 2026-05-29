<?php


class configControlador{

    static public function config(){

        $GLOBALS["col"] = "purple";

        $config = array(
            "color" => "purple",
            "title" => "NutriSoft Software Nutricional"

        );
        return $config;

    }


}