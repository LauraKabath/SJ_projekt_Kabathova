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
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="col-md-6">
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

                    $filename = $_FILES["uploadfile"]["name"];
                    $tempname = $_FILES["uploadfile"]["tmp_name"];

                    if ($mineralObject->updateMineral($mineral_id, $nazov, $zlozenie, $vzorec, $sustava, $popis, $pouzitie, $naleziska)){
                        echo "Mineral bol úspešne updatovaný";
                    } else {
                        echo 'Nastala chyba pri updatovaní minerálu';
                    }
                }
                ?>
            </form>
        </section>
    </main>
<?php include "parts/footer.php"?>