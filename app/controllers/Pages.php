<?php
class Pages extends Controller {
    public function __construct() {
    }

    public function index() {
        $data = [
            'title' => 'Kashash Schoonmakenservice',
            'foto' => '/public/img/backhome.jpg'
        ];

        $this->view('index', $data);
    }

    public function overons() {
        $data = [
            'title' => 'over ons, Wie zijn we?',
            'foto' => '/public/img/over ons.jpg'
        ];

        $this->view('pages/overons', $data);
    }
    public function dinsten() {
        $data = [
            'title' => 'Dinsten page',
            'foto' => '/public/img/diensten.jpg'
        ];

        $this->view('pages/dinsten', $data);
    }

    public function contact() {
        if (isset($_POST['submit'])) 
        {
            $name = $_POST['naam'];
            $tel = $_POST['telefoonnummer'];
            $subject=$_POST['naam'];
            $mailFrom = $_POST['email'];
            $message = $_POST['message'];
            $mailTo = "info@kashash.nl";
            $headers = "From: " .$mailFrom;
            $txt = "Afzender Naam: " .$name.".\n\n".
            "E-mailadres: ".$mailFrom.".\n\n".
            "Telefoon Nummer: ".$tel.".\n\n".
            "Bericht: ".$message;
            
        
            mail($mailTo, $subject, $txt, $headers);
        
        
            echo '  <div class="box-message">
                <div class="col__message">
                <div class="header__message">
                <i class="fa-solid fa-circle-check"></i>
                </div>
                <div class="content__message">
                    <h1>thank you!</h1>
                    <p>
                        Uw informatie is succesvol opgeslagen, wij wekren gauw om conatct met u op te nemen 
                    </p>
                </div>
                <div class="button__message">
                    <button>Ok</button>
                </div>
                </div>
            </div>';

            }
    
            $data = ['title' => 'Contact opnemen',
                        'foto' => '/public\img\25.jpg'];
    $this->view('pages/contact', $data);
}
    public function projecten(){
    $data = [
        'title' => 'own projecten',
        'foto' => '/public/img/projecten.jpg'
    ];

    $this->view('pages/projecten', $data);
}

}
