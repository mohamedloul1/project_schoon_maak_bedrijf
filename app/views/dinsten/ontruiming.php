<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/ontruiming.css">
    <link rel="stylesheet" href="/public/css/main.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>

        <div class="back_ont">
<div class="ontruiming-back"></div>
            <div class="text-ontruiming-back">
                <h1>Ontruiming</h1>
                </div>
</div>


        <section class="ontruiming-section container" style="width: 75%;">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <h1 class="text-ontruiming mb-5">Ontruiming</h1>
            <p class="p-text">
           Wij maken snel en uw woonruimte of uw professionals leeg, of het nu gaat om emigratie, verhuizing of overlijden. <br>
           Het leegmaken van een woning of bedrijfspand is vaak een tijdrovende klus. <br>
           Waar moet alles heen?
           Wat wordt er weggegooid?
           Daarnaast speelt ook het fysieke aspect een rol: spullen, het tapijt verwijderen, het afval verstoren.
           Kortom hard werken.
           Na de ontruiming maken we alles perfect.
           Ons werk is pas klaar als u tevreden bent met het resultaat.
           Alles wordt netjes en schoon achtergelaten.
           Al uw wensen komen aan bod, zoals het verwijderen van de vloeren de gordijnen.
           Samen komen we precies overeen wat we gaan doen
           Het komt samen.

             
            </p>
            <br>
            <br>
            <br>
            <br>
            <div class=" mb-5 form-floating d-grid gap-2 submit-button">
                    <a  class="btn btn-primary btn-lg" href="<?php echo URLROOT; ?>pages/contact" type="submit" name="submit" style="color: white;   font-size: 16px;
                   font-family: 'Days One', sans-serif;">Afspraak maken</a>
                    <span id="submit-error">
                    </span>
                </div>
 
        </div>

        <div class="col-sm-12 col-md-6 ms-auto">
          <img class="img-fluid" src="../img/schoonmaken-zen.jpg" alt="">
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