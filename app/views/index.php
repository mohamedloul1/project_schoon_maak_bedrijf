<!doctype html>
<html lang="nl">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- custom font awesome cdn link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- custom css file link -->
  <link rel="stylesheet" href="/public/css/main.css">
  <link rel="stylesheet" href="/public/css/home.css">
  <title>kashash schoonmaakservice || Home pagina</title>
</head>

<body>
  <!-- Navbar -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>
  <!-- Banner -->
  <?php require '' . APPROOT . '/views/includes/banner.php'; ?>
  <!-- Home pagina -->
  <section class="my-cards">
    <div class="card-container">
      <div class="first-card">
        <i class="bi bi-house-heart-fill"></i>
        <h1>&nbsp;&nbsp;Vertrouwen &nbsp;&nbsp;</h1>
        <p>We zijn altijd eerlijk en transparant <br> met onze klanten, en zo bouwen we <br> een hechte vertrouwensrelatie op.</p>
      </div>
      <div class="second-card">
        <i class="bi bi-clock-fill"></i>
        <h1>24-uur service</h1>
        <p>U kunt altijd rekenen op kashash <br> schoonmaakservice. Ook kunnen wij <br> 24/7 spoedeisende hulp bieden..</p>
      </div>
      <div class="third-card">
        <i class="bi bi-hearts"></i>
        <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Liefde&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
        <p>Bij kashash schoonmaakservice <br> houden we van ons vak, onze <br> medewerkers en onze klanten.</p>
      </div>
    </div>
  </section>
  <!-- carpusel -->
  <div class="container" id="controller-carousel">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/public/img/project1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/public/img/project2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/public/img/project3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  <!-- Stappen How-Working -->
  <section class="how-working">
    <div class="header_working">
      <div class="titel_hoe_werkt_het">
        <h1>Hoe werkt het?</h1>
      </div>
    </div>
    <div class="container-card__working">
      <div class="first-card__working">
        <i class="fas fa-id-card-alt"></i>
        <ol>
          <li>Ten eerst moet u naar de contact pagina gaan.</li>
        </ol>
        <p> <i class="fas fa-exclamation-circle" id="alert"></i>
          U kunt deze pagina bereiken door naar top of beneden te scrollen en op knop contact te klikken
        </p>
      </div>
      <div class="second-card__working">
        <i class="fas fa-file-signature"></i>
        <ol start="2">
          <li>vervolgens zal een blad verschijnen waar u informatie kunt invoeren.</li>
        </ol>
        <p>
          <i class="fas fa-check-circle text-success" id="alert"></i>
          Uw privacy worden gegarandeerd
          Uw privacy is gewaarborgd.
          worden op de meest veilige manier opgeslagen.
          <br>
        </p>
      </div>
      <div class="third-card__working">
        <i class="fas fa-save"></i>
        <ol start="3">
          <li>Vervolgens worden uw ingevoerde gegevens opgeslagen.</li>
        </ol>
        <p>
          <i class="fas fa-check-circle text-success" id="alert"></i>
          Deze gegvens worden opgeslagen op het veiligste manier en worden niet met derden geddeld
        </p>
      </div>
      <div class="four-card__working">
        <i class="fas fa-phone-square-alt"></i>
        <ol start="4">
          <li>Ten slot wordt u gebeld door een van onze mederwerker</li>
        </ol>
        <p>
          <i class="fas fa-envelope-open" id="alert"></i>
          U ontvangt een bevestiging op uw eigen e-mail en vervolgens wordt u binnen 1 werkdag gebeld
        </p>
      </div>
    </div>
  </section>
  <!-- Diensten Home pagina -->
  <section class="onze-diensten">
    <div class="container__onze-diensten">
      <div class="onze_diensten">
        <div class="titel_onze_diensten">
          <h1>Onze diensten</h1>
        </div>
      </div>
      <div class="cards__onze-diensten">
        <div class="first-crad__onze-diensten">
          <img src="/public/img/scoonmaken-di.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/schoonmaak'">Lees meer</button>
          <p>Schoonmaken</p>
        </div>
        <div class="second-crad__onze-diensten">
          <img src="/public/img/bouw.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/bouwoplevering'">Lees meer</button>
          <p>Bouw oplevering</p>
        </div>
        <div class="third-crad__onze-diensten">
          <img src="/public/img/glas.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/glasbewassing'">Lees meer</button>
          <p>Glasbewassing</p>
        </div>
        <div class="four-crad__onze-diensten">
          <img src="/public/img/foolronderhoud.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/vloeronderhoud'">Lees meer</button>
          <p>vloer onderhoud</p>
        </div>
        <div class="five-crad__onze-diensten">
          <img src="/public/img/muur.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/gevelreiniging'">Lees meer</button>
          <p>gevelreiniging</p>
        </div>
        <div class="six-crad__onze-diensten">
          <img src="/public/img/ontruiming.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/ontruiming'">Lees meer</button>
          <p>ontruiming</p>
        </div>
        <div class="zeven-crad__onze-diensten">
        </div>
        <div class="acht-crad__onze-diensten">
          <img src="/public/img/hotel.jpg">
          <button onclick="window.location.href='<?php echo URLROOT; ?>dinsten/hotel_schoonmaak'">Lees meer</button>
          <p>Hotel</p>
        </div>

      </div>
    </div>
  </section>
  <!-- Contactfoto -->
  <?php require APPROOT . '/views/includes/contactfoto.php'; ?>
  <!-- Footer -->
  <?php require APPROOT . '/views/includes/footer.php'; ?>
  <!-- Whatsapp icon -->
  <?php require APPROOT . '/views/includes/whatsappicon.php'; ?>
  <!-- Loader -->
  <?php require APPROOT . '/views/includes/loader.php'; ?>







  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <script src="/js/errorName.js"></script>
</body>

</html>