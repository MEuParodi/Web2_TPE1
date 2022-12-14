<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class  boatView {
    private $smarty;
    
    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    public function showAll($boats, $warning = null , $boat_id = null) {
        $this->smarty->assign('boats', $boats);
        $this->smarty->assign('warning', $warning);
        $this->smarty->assign('boat_to_delete', $boat_id);
        $this->smarty->display('tables/boats.tpl');
    }

    public function showError($error, $errorNumber, $location){
        $this->smarty->assign('error', $error);
        $this->smarty->assign('location', $location);
        $this->smarty->display('errors/error'.$errorNumber.'.tpl');
    }

    public function showFormAdd(){
        $this->smarty->display('forms/addBoat.tpl');
    }

    public function showFormEdit($boat){
        $this->smarty->assign('boat', $boat);
        $this->smarty->display('forms/editBoat.tpl');
    }

}