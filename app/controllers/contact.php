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
            
            
                echo '<div class="alert alert-success mt-5 w-50 mx-auto text-center" role="alert">
                We doen ons best om binnen 24 uur contact met je op te nemen. Bedankt voor het vertrouwen en wij hopen u snel te zien.
              </div>';
                }
        

        $this->view('contact/index');
    }

    
}
?>
