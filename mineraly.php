<?php include_once "parts/head.php" ?>
<body>
<?php include "parts/navigacia.php" ?>
<main>
    <?php
    $mineralObject = new Minerals();
    if ($mineralObject->isLoggedIn()){
    ?>
    <section>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="fotka">Obrázok:</label>
                            <input class="form-control" type="file" name="uploadfile" value="">
                        </div>
                        <div class="form-group">
                            <label for="nazov">Názov minerálu:</label>
                            <input type="text" class="form-control" id="nazov" name="nazov" required>
                        </div>
                        <div class="form-group">
                            <label for="zlozenie">Chemické zloženie:</label>
                            <input type="text" class="form-control" id="zlozenie" name="zlozenie">
                        </div>
                        <div class="form-group">
                            <label for="vzorec">Vzorec:</label>
                            <input type="text" class="form-control" id="vzorec" name="vzorec">
                        </div>
                        <div class="form-group">
                            <label for="sustava">Kryštálová sústava:</label>
                            <input type="text" class="form-control" id="sustava" name="sustava">
                        </div>
                        <div class="form-group">
                            <label for="popis">Popis:</label>
                            <textarea class="form-control" id="popis" name="popis" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="pouzitie">Použitie:</label>
                            <textarea class="form-control" id="pouzitie" name="pouzitie" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="naleziska">Výskyty:</label>
                            <textarea class="form-control" id="naleziska" name="naleziska" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submitMineral" class="btn btn-secondary">Odoslať</button>
                        <?php
                        if (isset($_POST['submitMineral'])){
                            $nazov = $_POST['nazov'];
                            $zlozenie = $_POST['zlozenie'];
                            $vzorec = $_POST['vzorec'];
                            $sustava = $_POST['sustava'];
                            $popis = $_POST['popis'];
                            $pouzitie = $_POST['pouzitie'];
                            $naleziska = $_POST['naleziska'];

                            $filename = $_FILES["uploadfile"]["name"];
                            $tempname = $_FILES["uploadfile"]["tmp_name"];

                           if ($mineralObject->addMineral($nazov, $zlozenie, $vzorec, $sustava, $popis, $pouzitie, $naleziska, $filename, $tempname)){
                               echo "Mineral bol úspešne pridaný";
                           } else {
                               echo 'Nastala chyba pri pridávaní minerálu';
                           }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <section>
        <div class="container">
            <?php
                $mineralObject->selectMineral();
            ?>
        </div>
    </section>
</main>
<?php include "parts/footer.php"?>
