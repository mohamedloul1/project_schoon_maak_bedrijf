<?php
class Contact extends Controller {
    public function __construct() {
    }

    public function index() {
            if (isset($_POST['submit'])) 
            {
                $name = $_POST['naam'];
                $tel = $_POST['telefoonnummer'];
                $subject=$_POST['naam'];
                $mailFrom = $_POST['email'];
                $message = $_POST['message'];
                $mailTo = "testmail";
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
        

        $this->view('contact/index');
    }

    
}
?>
