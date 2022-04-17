<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/public/css/schoonmaak.css">
  <link rel="stylesheet" href="/public/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>

<body>
  <!-- Navbar -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>
  <!-- Foto en text Achtergrond -->
<div class="back_schoon">
<div class="schoonmaak-back"></div>
            <div class="text-schoonmaak-back">
                <h1>Schoonmaak</h1>
                </div>
</div>
  <!-- Het begin van section -->
  <section class="schoonmaak-section container" style="width: 75%;">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <h1 class="text-schoonmaak mb-5">Schoonmaak</h1>
        <p class="p-text">
        Voor dagelijkse schoonmaak van gebouwen ben je hier aan het juiste adres. <br>
        Op dit moment verzorgen wij de huishouding voor: 
        Kantoren/commerciële ruimtes
        Onderwijsinstellingen
        Gezondheids faciliteiten
        Fabrieksruimtes
        Vrijetijdsbedrijven, enz. <br>
        In overleg met de opdrachtgever wordt een werkprogramma opgesteld. <br>
        De werkzaamheden en frequenties zijn daar gedefinieerd, geheel naar wens van de klant. <br>
        Regelmatige monitoring en evaluatie is daarbij van groot belang.

        </p>
        <br>
        <br>
        <br>
        <br>
        <div class=" mb-5 form-floating d-grid gap-2 submit-button">
          <a class="btn btn-primary btn-lg" href="<?php echo URLROOT; ?>pages/contact" type="submit" name="submit" style="color: white;   font-size: 16px;
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
  <!-- Het einde van section -->
  <!-- Includes Contact-Foto-Met-Butten -->
  <?php require APPROOT . '/views/includes/contactfoto.php'; ?>
  <!-- Includes Footer -->
  <?php require APPROOT . '/views/includes/footer.php'; ?>
  <!-- Includes Whatsapp Icon -->
  <?php require APPROOT . '/views/includes/whatsappicon.php'; ?>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="/public/js/errorName.js"></script>


</body>

</html>