<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/vloeronderhoud.css">
    <link rel="stylesheet" href="/public/css/main.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>

  <div class="vloeronderhoud-back">
            <div class="text-vloeronderhoud-back">
                <h2>Vloeronderhoud</h2>

            </div>
        </div>


        <section class="vloeronderhoud-section container" style="width: 75%;">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <h2 class="text-contact mb-5">Neem contact op</h2>
            <p class="p-text">
                Het is altijd mogelijk dat je vragen of opmerkingen hebt over kashash schoonmaak service. Wij staan altijd open om contact met ons op te nemen, dit kunt u doen door gebruik te maken van de contactmogelijkheden op onze website of door het formulier hiernaast in te vullen.
            </p>
            <p class="p-text">
                We doen ons best om binnen 24 uur na het invullen van het formulier contact met je op te nemen.
            </p>
            <p class="p-text">
                Bedankt voor het vertrouwen en wij hopen u snel te zien.
            </p>
            <br>
            <br>
            <br>
            <br>
            <div class=" mb-5 form-floating d-grid gap-2 submit-button">
                    <a  class="btn btn-primary btn-lg" type="submit" name="submit" style="color: white;">Afspraak maken</a>
                    <span id="submit-error">
                    </span>
                </div>
 
        </div>

        <div class="col-sm-12 col-md-6 ms-auto">
          <img src="../img/schoonmaken-zen.jpg" alt="">
        </div>
    </div>
</div>
</div>
</section>



  <?php require APPROOT . '/views/includes/contactfoto.php'; ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>
<?php require APPROOT . '/views/includes/whatsappicon.php'; ?>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<script src="/public/js/errorName.js"></script>

    
  </body>
</html>