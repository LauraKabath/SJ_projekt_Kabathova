<?php include_once "parts/head.php" ?>
    <body>
<?php include "parts/navigacia.php" ?>
<?php
    $mineral_id = $_GET['id'];
    $mineralObject = new Minerals();

    $mineral = $mineralObject->getMineralById($mineral_id);
    if (!$mineral){
        echo "Minerál sa nenašiel";
        header('Location: mineraly.php');
    }
?>
    <main>
        <section>
            <div class="container my-5">
                <form action="" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h3>Zmena obsahu:</h3>
                            <div class="form-group">
                                <label for="nazov">Názov minerálu:</label>
                                <input class="form-control" type="text" id="nazov" name="nazov" value="<?php echo $mineral['min_nazov']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="zlozenie">Chemické zloženie:</label>
                                <input class="form-control" type="text" id="zlozenie" name="zlozenie" value="<?php echo $mineral['chemzlozenie']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="vzorec">Vzorec:</label>
                                <input class="form-control" type="text" id="vzorec" name="vzorec" value="<?php echo $mineral['vzorec']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="sustava">Kryštálová sústava:</label>
                                <input class="form-control" type="text" id="sustava" name="sustava" value="<?php echo $mineral['krysustava']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="popis">Popis:</label>
                                <textarea class="form-control" id="popis" name="popis" rows="4"><?php echo $mineral['popis']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="pouzitie">Použitie:</label>
                                <textarea class="form-control" id="pouzitie" name="pouzitie" rows="3"><?php echo $mineral['pouzitie']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="naleziska">Výskyty:</label>
                                <textarea class="form-control" id="naleziska" name="naleziska" rows="3"><?php echo $mineral['naleziska']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="updateMineral" class="btn btn-secondary">Update</button>
                                <button type="submit" name="deleteMineral" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['updateMineral'])){
                        $nazov = $_POST['nazov'];
                        $zlozenie = $_POST['zlozenie'];
                        $vzorec = $_POST['vzorec'];
                        $sustava = $_POST['sustava'];
                        $popis = $_POST['popis'];
                        $pouzitie = $_POST['pouzitie'];
                        $naleziska = $_POST['naleziska'];

                        if ($mineralObject->updateMineral($mineral_id, $nazov, $zlozenie, $vzorec, $sustava, $popis, $pouzitie, $naleziska)){
                            echo "Mineral bol úspešne updatovaný";
                        } else {
                            echo "Nastala chyba pri updatovaní minerálu";
                        }
                    }
                    if (isset($_POST['deleteMineral'])){
                        /*
                        if ($mineralObject->deleteMineral($mineral_id)){
                            echo "Minerál bol vymazaný";
                        } else {
                            echo "Nastala chyba pri vymazávaní minerálu";
                        }*/
                    }
                    ?>
                </form>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <h3>Zmena fotky:</h3>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="fotka">Obrázok:</label>
                                <input class="form-control" type="file" name="uploadfile" value="">
                            </div>
                            <button type="submit" name="changePhoto" class="btn btn-secondary">Upload</button>
                            <?php
                            if (isset($_POST['changePhoto'])){
                                $filename = $_FILES["uploadfile"]["name"];
                                $tempname = $_FILES["uploadfile"]["tmp_name"];

                                if ($mineralObject->updatePhoto($mineral_id, $filename, $tempname)){
                                    echo "Fotka bola úspešne updatovaná!";
                                } else {
                                    echo "Nastala chyba pri updatovaní fotky";
                                }
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include "parts/footer.php"?>