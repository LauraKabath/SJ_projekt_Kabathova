<?php include_once "parts/head.php" ?>
<body>
<?php include "parts/navigacia.php" ?>
<main>
    <?php
    $rockObject = new Rocks();
    if ($rockObject->isLoggedIn()){
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
                                <label for="nazov">Názov horniny:</label>
                                <input type="text" class="form-control" id="nazov" name="nazov" required>
                            </div>
                            <div class="form-group">
                                <label for="zaradenie">Skupinové zaradenie:</label>
                                <input type="text" class="form-control" id="zaradenie" name="zaradenie">
                            </div>
                            <div class="form-group">
                                <label for="farba">Farba:</label>
                                <input type="text" class="form-control" id="farba" name="farba">
                            </div>
                            <div class="form-group">
                                <label for="zasMineraly">Zastúpenie minerálov v hornine:</label>
                                <textarea class="form-control" id="zasMineraly" name="zasMineraly" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="stavba">Stavba horniny:</label>
                                <textarea class="form-control" id="stavba" name="stavba" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="naleziska">Výskyty:</label>
                                <textarea class="form-control" id="naleziska" name="naleziska" rows="3"></textarea>
                            </div>
                            <button type="submit" name="submitMineral" class="btn btn-secondary">Odoslať</button>
                            <?php
                            if (isset($_POST['submitMineral'])){
                                $nazov = $_POST['nazov'];
                                $zaradenie = $_POST['zaradenie'];
                                $farba = $_POST['farba'];
                                $zasMineraly = $_POST['zasMineraly'];
                                $stavba = $_POST['stavba'];
                                $naleziska = $_POST['naleziska'];

                                $filename = $_FILES["uploadfile"]["name"];
                                $tempname = $_FILES["uploadfile"]["tmp_name"];

                                if ($rockObject->addRock($nazov, $zaradenie, $farba, $zasMineraly, $stavba, $naleziska, $filename, $tempname)){
                                    echo "Hornina bola úspešne pridaná";
                                } else {
                                    echo 'Nastala chyba pri pridávaní horniny';
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
                $rockObject->selectRock();
           ?>
        </div>
    </section>
</main>
<?php include "parts/footer.php"?>