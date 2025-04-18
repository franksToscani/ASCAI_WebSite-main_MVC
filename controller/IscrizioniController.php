<?php
require_once 'model/IscrizioneModel.php';
class IscrizioniController {
    public function index() {
        $model = new IscrizioneModel();
        $iscrizioni = $model->getAll();
        include 'view/iscrizioni/index.php';
    }
}
?>