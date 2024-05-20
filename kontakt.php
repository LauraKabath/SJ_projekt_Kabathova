<?php ob_start(); ?>
<?php include_once "parts/head.php" ?>
    <body>
    <?php include "parts/navigacia.php" ?>
        <main>
            <section id="kontakt-forms">
                <div class="container my-5">
                    <div class="row d-flex justify-content-center mx-auto">
                        <!-- kontaktne udaje -->
                        <h1 class="kontakt-nadpis text-center mb-4">Kontaktujte nás</h1>
                        <div class="container">
                            <div class="alert alert-secondary text-center mb-4" role="alert" id="Alert">
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
                            <p><a href="mailto:mail@example.com">mineraly.horniny@gmail.com</a></p>
                            <h5 class="fw-bold mb-2"><i class="fa fa-phone"></i> Telefón</h5>
                            <p><a href="tel:0904111222333">0904 111 222 333</a></p>
                        </div>
                        <!-- kontaktne udaje -->

                            <!-- formular -->
                        <div class="col-lg-6">
                            <form class="w-75 p-4 border-3 rounded-0" action="" method="POST">
                                <div class="form-group">
                                    <label for="name">Meno a prezvisko*:</label><br>
                                    <input type="text" id="name" name="name" value="" class="w-100 p-1 border-2 rounded-4" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email*:</label><br>
                                    <input type="email" id="email" name="email" value="" class="w-100 p-1 border-2 rounded-4" required><br>
                                </div>
                                <div class="form-group">
                                    <label for="notes">Poznámka:</label><br>
                                    <textarea id="notes" name="notes" placeholder="Sem napíšte svoje poznámky..." class="w-100 p-1 border-2 rounded-4"></textarea><br>
                                </div>
                                <div class="form-group">
                                    <input id="check" type="checkbox" class="GDPR" required>
                                    <label for="check">Súhlas so spracovaním osobných údajov*</label><br>
                                </div>
                                <div class="form-group"> 
                                    <label for="submit"></label><br>
                                    <input id="submit" name="submit" type="submit" value="Odoslať" class="btn rounded-3" onclick="validate()"><br>
                                </div>
                                <?php
                                if (isset($_POST['submit'])) {
                                    $meno = $_POST['name'];
                                    $email = $_POST['email'];
                                    $notes = $_POST['notes'];

                                    $form = new Kontakt();
                                    if ($form->addNote($meno, $email, $notes)) {
                                        header("Location: thank_you.php");
                                    } else {
                                        echo 'Nastala chyba pri odosielaní formulára';
                                    }
                                }
                                ?>

                            </form>
                        </div>
                         <!-- formular -->
                    </div>
                </div>
            </section>
        </main>
        <?php include "parts/footer.php"?>
        <script src="js/kontakt_validate.js"></script>
<?php ob_end_flush(); ?>