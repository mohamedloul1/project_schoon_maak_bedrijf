<?php
    class Project extends Controller {
        public function __construct() {
        }

        public function index(){
            $data = [
                'title' => 'own projecten'
            ];

            $this->view('project/index', $data);
        }
    }
?>