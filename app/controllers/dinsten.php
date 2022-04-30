<?php
class Dinsten extends Controller {
    public function __construct() {
    }

  

   
    public function schoonmaak() {
        $data = [
            'title' => 'Schoonmaak',
            'foto' => '/public/img/schoonmaken1.jpg'
        ];

        $this->view('dinsten/schoonmaak', $data);
    }
    public function bouwoplevering() {
        $data = [
            'title' => 'Bouwoplevering',
            'foto'=> '/public/img/bouwoplevering.jpg'
        ];

        $this->view('dinsten/bouwoplevering', $data);
    }
    public function glasbewassing() {
        $data = [
            'title' => 'Glasbewassing',
            'foto'=> '/public/img/glaswassing1.jpg'
        ];

        $this->view('dinsten/glasbewassing', $data);
    }
    public function vloeronderhoud() {
        $data = [
            'title' => 'Vloeronderhoud',
            'foto'=>'/public/img/vloeronderhoud1.jpg'
        ];

        $this->view('dinsten/vloeronderhoud', $data);
    }
    public function gevelreiniging() {
        $data = [
            'title' => 'Gevelreiniging',
            'foto'=>'/public/img/muurschoon.jpg'
        ];

        $this->view('dinsten/gevelreiniging', $data);
    }
    public function ontruiming() {
        $data = [
            'title' => 'Ontruiming',
            'foto'=>'/public/img/neetjes.jpg'
        ];

        $this->view('dinsten/ontruiming', $data);
    }
    public function hotel_schoonmaak() {
        $data = [
            'title' => 'Hotel Schoonmaak',
            'foto'=>'/public/img/hotel_dienst.jpg'
        ];

        $this->view('dinsten/hotel_schoonmaak', $data);
    }


    
}
