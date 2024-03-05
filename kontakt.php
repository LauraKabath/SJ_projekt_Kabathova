<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Turistika na Muránskej planine">
        <meta name="author" content="Laura Kabáthová">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontakt - Turistika na Muránskej planine</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/kontakt.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php include "parts/header.php"?>
        <main>
            <section id="kontakt-forms">
                <div class="container my-5">
                    <div class="row d-flex justify-content-center mx-auto">
                        <!-- kontaktne udaje -->
                        <h1 class="kontakt-nadpis text-center mb-4">Kontaktujte nás</h1>
                        <div class="container">
                            <div class="alert alert-warning text-center mb-4" role="alert" id="Alert">
                                Polia označené * musia byť vyplnené
                                <button type="button" class="close" onclick="zavriet()" aria-label="Close">
                                <span aria-hidden="true">&times;</span> 
                                </button>
                            </div>
                        </div>
                        <div class="kontakt-data col-md-5 col-lg-3 col-xl-3 mx-auto mb-4">
                            <h5 class="fw-bold mb-2"><i class="fa fa-map-marker"></i> Adresa</h5>
                            <p>Muránska 18, 050 01 Revúca</p>
                            <h5 class="fw-bold mb-2"><i class="fa fa-envelope"></i> E-mailová adresa</h5>
                            <p><a href="mailto:mail@example.com">muranska.turistika@gmail.com</a></p>
                            <h5 class="fw-bold mb-2"><i class="fa fa-phone"></i> Telefón</h5>
                            <p><a href="tel:0904111222333">0904 111 222 333</a></p>
                        </div>
                        <!-- kontaktne udaje -->

                            <!-- formular -->
                        <div class="col-lg-6">
                            <form class="w-75 p-4 border-3 rounded-0" onsubmit="submitForm(event)">
                                <!-- pole: meno -->
                                <div class="form-group">
                                    <label for="name">Meno a prezvisko*:</label><br>
                                    <input type="text" id="name" name="name" value="" class="w-100 p-1 border-2 rounded-4" required><br>
                                </div>
                                <!-- pole: meno -->

                                <!-- pole: email -->
                                <div class="form-group">
                                    <label for="email">Email*:</label><br>
                                    <input type="email" id="email" name="email" value="" class="w-100 p-1 border-2 rounded-4" required><br>
                                </div>
                                <!-- pole: email -->
                                
                                <!-- pole: poznamka -->
                                <div class="form-group">
                                    <label for="notes">Poznámka:</label><br>
                                    <textarea id="notes" name="notes" placeholder="Sem napíšte svoje poznámky..." class="w-100 p-1 border-2 rounded-4"></textarea><br>
                                </div>
                                <!-- pole: poznamka -->

                                <!-- pole: checkbox -->
                                <div class="form-group">
                                    <input id="check" type="checkbox" class="GDPR" required>
                                    <label for="check">Súhlas so spracovaním osobných údajov*</label><br>
                                </div>
                                <!-- pole: checkbox -->

                                <!-- pole: submit -->
                                <div class="form-group"> 
                                    <label for="submit"></label><br>
                                    <input id="submit" type="submit" value="Odoslať" class="btn rounded-3" onclick="validate()"><br>
                                </div>
                                 <!-- pole: submit -->
                            </form>
                        </div>
                         <!-- formular -->
                    </div>
                </div>
            </section>
        </main>
        <?php include "parts/footer.php"?>
        <script src="js/kontakt_validate.js"></script>
    </body>
</html>