<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

     <!-- custom font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- custom css file link -->
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/home.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- Navbar -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>
  
  <div class="container-home">
  <div class="image"></div>
  <div class="text">
    <h1>Zen kashash schoon maak service</h1>
    
  </div>   
</div>

<section class="my-cards">
  <div class="card-container">
    <div class="first-card">
      <i class="bi bi-fingerprint"></i>
      <h3>Vertrouwen</h3>
      <p>We zijn altijd eerlijk en transparant met onze klanten, en zo bouwen we een hechte vertrouwensrelatie op.</p>
    </div>
    <div class="second-card">
      <i class="bi bi-clock-fill"></i>
      <h3>24-uur service</h3>
      <p>U kunt altijd rekenen op Zen kashash. Ook kunnen wij 24/7 spoedeisende hulp bieden..</p>

    </div>
    <div class="third-card">
      <i class="fas fa-heart"></i>
      <h3>Liefde</h3>
      <p>Bij Zen kashash houden we van ons vak, onze medewerkers en onze klanten..</p>
    </div>
  </div>
</section>


<section class="carousel__home">
  <div id="carouselExampleCaptions" class="carousel slide w-75" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/public/img/cleaner-image.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/public/img/cleaner-image.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/public/img/cleaner-image.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>


<section class="how-working">
  <div class="header__working">
    <h2>Hoe werkt het</h2>
  </div>
  <div class="language__working">
    <li><a href="">Nederlands</a></li>
  </div>
  <div class="container-card__working">
    <div class="first-card__working">
      <i class="fas fa-id-card-alt"></i>
      <ol>
        <li>Je moet naar de contact pagina gaan</li>
      </ol>
      <p> <i class="fas fa-exclamation-circle" id="alert"></i>
        U kunt deze pagina bereiken door naar top of beneden te scrollen en op knop contact te klikken
      </p>
    </div>
    <div class="second-card__working">
      <i class="fas fa-file-signature"></i>
      <ol start="2">
        <li>Vul je gegvens in.</li>
      </ol>
      <p>
        <i class="fas fa-check-circle text-success" id="alert"></i>
        Uw privacy worden gegarandeerd
      </p>
    </div>
    <div class="third-card__working">
      <i class="fas fa-save"></i>
      <ol start="3">
        <li>Daarna u ingevulde informatie worden opgeslagen</li>
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
        U krijgt ook besetiging op u eigen email en daarna wordt u gebeld binnen 1 werkdagen
      </p>
    </div>
  </div>
</section>

<section class="onze-diensten">
  <div class="container__onze-diensten">
    <h3>Onze diensten</h3>
    <div class="cards__onze-diensten">
      <div class="first-crad__onze-diensten">
        <img src="/public/img/schoonmaak-onderhoud.jpg">
        <button>More info</button>
        <p>Schoonmaken onderhoud</p>
      </div>
      <div class="second-crad__onze-diensten">
        <img src="/public/img/bouw-oplevering.jfif">
        <button>More info</button>
        <p>Bouw oplevering</p>
      </div>
      <div class="third-crad__onze-diensten">
        <img src="/public/img/glasbewassing.jpg">
        <button>More info</button>
        <p>Glasbewassing</p>
      </div>
      <div class="four-crad__onze-diensten">
        <img src="/public/img/vloer-onderhoud.jpg">
        <button>More info</button>
        <p>vloer onderhoud</p>
      </div>
      <div class="five-crad__onze-diensten">
        <img src="/public/img/gevel-reininigin.jpg">
        <button>More info</button>
        <p>gevelreiniging</p>
      </div>
      <div class="six-crad__onze-diensten">
        <img src="/public/img/ontruiming.png">
        <button>More info</button>
        <p>ontruiming</p>
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

    <script src="/js/errorName.js"></script>
  </body>
</html>
