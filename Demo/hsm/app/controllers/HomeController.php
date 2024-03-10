<?php
require_once APP_ROOT.'/app/service/PatientService.php';

class HomeController{
    public function index(){
        // goi du lieu tu PatienService
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
//
//        echo "<pre>";
//        print_r($patients);
//        echo '</pre>';

        // render data lay dc tu HOmePage
        include APP_ROOT.'/app/views/home/index.php';
    }

}
