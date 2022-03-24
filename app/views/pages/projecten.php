<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/contact.css">
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/projecten.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title></title>
</head>

<body>

    <!-- Navbar -->
    <?php require APPROOT . '/views/includes/navbar.php'; ?>

    <!-- Contact Opnemen Background -->
    <div class="contact-back">
        <div class="text-contact-back">
            <h1><?= $data["title"]; ?></h1>
        </div>
    </div>


    <!-- project navbar -->
    <section class="navbar-projecten">
        <div class="navbar-projecten-for-cards">
           
            <ul>
                <li><a href="" data-src="./img/26.jpg" data-src2="./img/diensten-2.jpg" data-src3="./img/diensten-3.jpg" data-src4="./img/diensten-5.jpg" data-src5="./img/glas.jpg" data-src6="./img/glasbewassing.jpg">Schoonmaken onderhoud</a></li>
                <li><a href="">Bouw oplevering</a></li>
                <li><a href="" data-src="./img/Dani.jpg">Glasbewassing</a></li>
                <li><a href="" data-src="./img/26.jpg">vloer onderhoud</a></li>
                <li><a href="">gevelreiniging</a></li>
                <li><a href="">ontruiming</a></li>
            </ul>
        </div>


        <!-- project card start -->
    <div class="content__project">
    <div class="cards">
      <div class="first-card" id="scroll-effect">
        <div class="start__cards">
          <img src="../img/25.jpg">
        </div>
        <div class="header__cards">
          <span>4 degen geleden<br>
          <strong>project naam</strong>
        </span>
        </div>
        <div class="content-txt__cards">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos, sapiente facere quos deserunt cumque, eaque ex nobis sint fuga provident! Asperiores quia quis, nulla dolores corporis error fugit nisi.</p>
        </div>
      </div>


      <div class="second-card" id="scroll-effect">
        <div class="start__cards">
          <img src="../img/25.jpg">
        </div>
        <div class="header__cards">
          <span>4 degen geleden<br>
          <strong>project naam</strong>
        </span>
        </div>
        <div class="content-txt__cards">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos, sapiente facere quos deserunt cumque, eaque ex nobis sint fuga provident! Asperiores quia quis, nulla dolores corporis error fugit nisi.</p>
        </div>
      </div>

      <div class="third-card" id="scroll-effect">
        <div class="start__cards">
          <img src="../img/25.jpg">
        </div>
        <div class="header__cards">
          <span>4 degen geleden<br>
          <strong>project naam</strong>
        </span>
        </div>
        <div class="content-txt__cards">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos, sapiente facere quos deserunt cumque, eaque ex nobis sint fuga provident! Asperiores quia quis, nulla dolores corporis error fugit nisi.</p>
        </div>
      </div>

      <div class="four-card" id="scroll-effect">
        <div class="start__cards">
          <img src="../img/25.jpg">
        </div>
        <div class="header__cards">
          <span>4 degen geleden<br>
          <strong>project naam</strong>
        </span>
        </div>
        <div class="content-txt__cards">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos, sapiente facere quos deserunt cumque, eaque ex nobis sint fuga provident! Asperiores quia quis, nulla dolores corporis error fugit nisi.</p>
        </div>
      </div>

      <div class="five-card" id="scroll-effect">
        <div class="start__cards">
          <img src="../img/25.jpg">
        </div>
        <div class="header__cards">
          <span>4 degen geleden<br>
          <strong>project naam</strong>
        </span>
        </div>
        <div class="content-txt__cards">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos, sapiente facere quos deserunt cumque, eaque ex nobis sint fuga provident! Asperiores quia quis, nulla dolores corporis error fugit nisi.</p>
        </div>
      </div>

      <div class="six-card" id="scroll-effect">
        <div class="start__cards">
          <img src="../img/25.jpg">
        </div>
        <div class="header__cards">
          <span>4 degen geleden<br>
          <strong>project naam</strong>
        </span>
        </div>
        <div class="content-txt__cards">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dignissimos, sapiente facere quos deserunt cumque, eaque ex nobis sint fuga provident! Asperiores quia quis, nulla dolores corporis error fugit nisi.</p>
        </div>
      </div>

    </div>
  </div>
    </section>
    <!-- project cards end -->



        <!-- Eind -->
        <?php require APPROOT . '/views/includes/contactfoto.php'; ?>
        <?php require APPROOT . '/views/includes/footer.php'; ?>
        <?php require APPROOT . '/views/includes/whatsappicon.php'; ?>

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <script src="/public/js/errorName.js"></script>


</body>

</html> 