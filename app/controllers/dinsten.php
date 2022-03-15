<?php
class Dinsten extends Controller {
    public function __construct() {
    }

   
    public function schoonmaak() {
        $data = [
            'title' => 'Schoonmaak page'
        ];

        $this->view('dinsten/schoonmaak', $data);
    }
    public function bouwoplevering() {
        $data = [
            'title' => 'Bouwoplevering page'
        ];

        $this->view('dinsten/bouwoplevering', $data);
    }
    public function glasbewassing() {
        $data = [
            'title' => 'glasbewassing page'
        ];

        $this->view('dinsten/glasbewassing', $data);
    }
    public function vloeronderhoud() {
        $data = [
            'title' => 'vloeronderhoud page'
        ];

        $this->view('dinsten/vloeronderhoud', $data);
    }
    public function gevelreiniging() {
        $data = [
            'title' => 'gevelreiniging page'
        ];

        $this->view('dinsten/gevelreiniging', $data);
    }
    public function ontruiming() {
        $data = [
            'title' => 'ontruiming page'
        ];

        $this->view('dinsten/ontruiming', $data);
    }


    
}
