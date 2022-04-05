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
    <link rel="stylesheet" href="/public/css/boxmessage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>

<body>
    <!-- Navbar -->
    <?php require APPROOT . '/views/includes/navbar.php'; ?>
    <!-- Contact Opnemen Background -->
    <div class="contact-back">
        <div class="text-contact-back">
            <h1>Contact Opnemen</h1>
        </div>
    </div>
    <!-- Eind -->
    <!-- Neem Contact op Text -->
    <section class="contact-section container " style="width: 75%;">
        <div class="row">
            <div class="col-sm-12 col-md-5">
            <div class="text-contact mb-5">
    <div class="alert  text-center" role="alert" style="background-color: #3175d3;" >
    <h1>Neem contact op</h1> 
    </div>
    </div>
                <p class="p-text">
                    Het is altijd mogelijk dat je vragen of opmerkingen hebt over kashash schoonmaak service. Wij staan altijd open om contact met ons op te nemen, dit kunt u doen door gebruik te maken van de contactmogelijkheden op onze website of door het formulier hiernaast in te vullen.
                    <br>
                    We doen ons best om binnen 24 uur na het invullen van het formulier contact met je op te nemen.
                    <br>
                    Bedankt voor het vertrouwen en wij hopen u snel te zien.
                </p>
                <!-- Contact Opnemen Icons -->
                <br>
                <br>
                <br>
                <br>
                <i class="icon-contact bi bi-geo-alt-fill"></i> &nbsp; &nbsp;
                <span class="icon-text"> <strong> Roelantdreef 196, 3562kg Utrecht </strong></span>
                <br>
                <br>
                <i class="icon-contact bi bi-telephone-fill"></i> &nbsp; &nbsp;
                <span class="icon-text"> <strong> <a style="color: black;" href="tel:+31655487744">+31&nbsp;655487744 </a> </strong></span>
                <br>
                <br>
                <i class="icon-contact bi bi-envelope-fill"></i> &nbsp; &nbsp;
                <span class="icon-text"> <strong> <a style="color: black;" href="mailto:info@kashash.nl"> info@kashash.nl </a> </strong></span>
            </div>
            <!-- Contact inputs  -->
            <div class="col-sm-12 col-md-6 ms-auto mt-5">
                <form action="contact" method="post">
                    <div class="row">
                        <div class="mt-3">
                            <div class="form-floating mb-3 input-name">
                                <input type="text" class="form-control" id="naam" name="naam" onkeyup="validate()" placeholder="naam" value="" aria-describedby="naamHelp">
                                <label for="floatingInput">naam</label>
                                <span id="message-name">
                                </span>
                            </div>
                        </div>
                        <div class="mb-3 input-email">
                            <div class="form-floating">
                            <input type="email" class="form-control" style="text-transform: none" id="email" name="email" onkeyup="validateEmail()" placeholder="email" value="" aria-describedby="emailHelp">
                                <label for="floatingInput">E-mailadres</label>
                                <span id="message-email">
                                </span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating input-phone">
                                <input type="tel" class="form-control" id="telefoonnummer" name="telefoonnummer" onkeyup="validatePhone()" placeholder="Telefoonnummer" value="" aria-describedby="telefoonnummerHelp">
                                <label for="floatingInput">Telefoonnummer</label>
                                <span id="message-phone">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3 input-opmerking">
                    <textarea class="form-control motivationtext" style="text-transform: none" placeholder="Vraag opmerking of beschrijving" onkeyup="validateMessage()" id="message" name="message" value="" aria-describedby="messageHelp"></textarea>
                        <label for="text">Vraag, opmerking of beschrijving.</label>
                        <span id="message-opmerking">
                        </span>
                    </div>
                    <div class="form-floating d-grid gap-2 submit-button">
                        <button onclick="return validateForm()" class="btn btn-primary btn-lg" style="font-size: 15px;" type="submit" name="submit">Verzenden</button>
                        <span id="submit-error">
                        </span>
                    </div>
                </form>
            </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Einde -->
    <?php require APPROOT . '/views/includes/contactfoto.php'; ?>
    <?php require APPROOT . '/views/includes/footer.php'; ?>
    <?php require APPROOT . '/views/includes/whatsappicon.php'; ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="/public/js/errorName.js"></script>
</body>

</html>