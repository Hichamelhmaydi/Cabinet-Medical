<?php
require_once("Models/Medecin.php");
class MedecinController{
    private $model ;

    public function __construct(){
        $this->model = new MedecinModel();
    }
    public function addMedcine($_POST){
        return $this->model->add($_POST);
    }
}