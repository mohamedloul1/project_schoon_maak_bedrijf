<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="/public/css/hotel_schoonmaak.css">
  <link rel="stylesheet" href="/public/css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Hello, world!</title>
</head>

<body>
  <!-- Navbar -->
  <?php require APPROOT . '/views/includes/navbar.php'; ?>
  <!-- Foto en text Achtergrond -->
<div class="back_hotel">
<div class="hotel_schoonmaak-back"></div>
            <div class="text-hotel_schoonmaak-back">
                <h1>Hotel Schoonmaak</h1>
                </div>
</div>
  <!-- Het begin van section -->
  <section class="hotel_schoonmaak-section container" style="width: 75%;">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <h1 class="text-hotel_schoonmaak mb-5">Hotel Schoonmaak</h1>
        <p class="p-text">
        Als hotel wilt u natuurlijk dat uw gasten tevreden zijn na een bezoek aan uw hotel.
        Een van de belangrijkste voorwaarden is dat uw gasten in de cleanroom kunnen verblijven.
        U wilt dat uw gasten comfortabel kunnen slapen en wakker worden zonder te maken te krijgen met slechte hygiëne.
        Bij kashash schoonmaakservice begrijpen we dit en zorgen we graag voor de perfecte hotelervaring voor uw gasten.
        Onze schoonmaakexperts zorgen niet alleen voor opgeruimde hotelkamers,
        maar bieden ook attente service. Ze werken professioneel en zorgen voor een vriendelijke en warme band met je gasten.
        Zo voelen al uw gasten zich meteen thuis in een stijlvol en ruim hotel!
        Zo kunt u de schoonmaak van uw hotel veilig uitbesteden aan kashash schoonmaakservice.

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
        <img class="img-fluid" src="../img/hotel_schoonmaak_page.jpg" alt="">
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