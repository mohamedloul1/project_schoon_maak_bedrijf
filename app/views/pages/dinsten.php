<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/public/css/dinsten.css">
  <link rel="stylesheet" href="/public/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Hello, world!</title>
</head>

<body>
  <!-- Navbar includes -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>
  <!-- Foto en text achtergrond -->
  <div class="diensten-back">
    <div class="text-diensten-back">
      <h1>Onze Diensten</h1>
    </div>
  </div>
  <!-- Het begin van section-diensten -->
  <section class="container section-diensten" style="width: 75%;">
    <h1 class="titel-diensten text-center">Dienstverlening</h1>
    <p class="p-diensten text-center">Hier hebben we alle diensten met betrekking tot schoonmaak <br>
      <br>
      Schoonmaakservice is een brede term die zich bezighoudt met de netheid van het interieur of exterieur van een gebouw. <br>
      <br>
      Ons team werkt met de hoogste kwaliteit<br>
      <br>
      Hier zijn enkele van de diensten die we aanbieden<br>
      <br>
      Als u andere diensten nodig heeft, kunt u contact met ons opnemen.
    </p>
    <!-- Het begin van cards -->
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-4" id="Schoonmaak">
          <div class="card-1">
            <img src="../img/scoonmaken-di.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title text-black text-center">Schoonmaak</h1>
              <p class="text-center">Dagelijkse of reguliere (vaste) schoonmaakwerkzaamheden door middel van schoonmaakonderhoud.</p>
              <div class="col-md-12 text-center">
                <a href="<?php echo URLROOT; ?>dinsten/schoonmaak" style="width: 10rem;" class="btn btn-primary">Lees meer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-4" id="Bouwoplevering">
          <div class="card-2">
            <img src="../img/bouw.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title text-black text-center">Bouwoplevering</h1>
              <p class="text-center">het opruimen van rommel en algemene reiniging van specifieke objecten, woning of kantoor. voor meer informatie kunt u contact met ons opnemen </p>
              <div class="col-md-12 text-center">
                <a href="<?php echo URLROOT; ?>dinsten/bouwoplevering" style="width: 10rem;" class="btn btn-primary">Lees meer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-4" id="Glasbewassing">
          <div class="card-1">
            <img src="../img/glas.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title text-black text-center">Glasbewassing</h1>
              <p class="text-center">Onze ervaren glazenwassers kunnen al uw ramen professioneel reinigen. Veiligheid staat hierbij natuurlijk voorop.</p>
              <div class="col-md-12 text-center">
                <a href="<?php echo URLROOT; ?>dinsten/glasbewassing" style="width: 10rem;" class="btn btn-primary">Lees meer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-4" id="Vloeronderhoud">
          <div class="card-2">
            <img src="../img/foolronderhoud.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title text-black text-center">Vloeronderhoud</h1>
              <p class="text-center">Vloeren moeten mogelijk het grootste deel van uw eigendom kunnen weerstaan. Onze experts weten precies welke vloeren behandeld moeten worden.</p>
              <div class="col-md-12 text-center">
                <a href="<?php echo URLROOT; ?>dinsten/vloeronderhoud" style="width: 10rem;" class="btn btn-primary">Lees meer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-4" id="Gevelreiniging">
          <div class="card-2">
            <img src="../img/muur.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title text-black text-center">Gevelreiniging</h1>
              <p class="text-center">De gevel bepaalt de eerste indruk van mensen. Dankzij jarenlange ervaring en knowhow weten onze experts van elk type gevel wat ze moeten doen!</p>
              <div class="col-md-12 text-center">
                <a href="<?php echo URLROOT; ?>dinsten/gevelreiniging" style="width: 10rem;" class="btn btn-primary">Lees meer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-4" id="Ontruiming">
          <div class="card-2">
            <img src="../img/ontruiming.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="card-title text-black text-center">Ontruiming</h1>
              <p class="text-center">Wij maken uw woning of bedrijf snel en netjes schoon, of het nu gaat om migratie, verhuizing of overlijden. <br> Wij zorgen ervoor. </p>
              <div class="col-md-12 text-center">
                <a href="<?php echo URLROOT; ?>dinsten/ontruiming" style="width: 10rem;" class="btn btn-primary">Lees meer</a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Het einde van section en cards -->
  <!-- Includes Foto-Contact-Met-Butten -->
  <?php require APPROOT . '/views/includes/contactfoto.php'; ?>
  <!-- Includes-Footer -->
  <?php require APPROOT . '/views/includes/footer.php'; ?>
  <!-- Includes-Whatsapp-Icon -->
  <?php require APPROOT . '/views/includes/whatsappicon.php'; ?>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="/public/js/errorName.js"></script>
</body>

</html>