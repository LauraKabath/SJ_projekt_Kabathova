<?php ob_start(); ?>
<?php include_once "parts/head.php" ?>
    <body>
<?php include "parts/navigacia.php" ?>
<?php
$rock_id = $_GET['id'];
$rockObject = new Rocks();

$rock = $rockObject->getRockById($rock_id);
if (!$rock){
    echo "Hornina sa nenašla";
    header('Location: horniny.php');
}
?>
    <main>
        <section>
            <div class="container my-5">
                <h5><a href="horniny.php" class="link-secondary link-underline-opacity-100-hover">Naspäť<i class="fa fa-angle-double-left"></i></a></h5>
                <form action="" method="POST">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nazov">Názov horniny:</label>
                                <input type="text" class="form-control" id="nazov" name="nazov" value="<?php echo $rock['rock_nazov']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="zaradenie">Skupinové zaradenie:</label>
                                <input type="text" class="form-control" id="zaradenie" name="zaradenie" value="<?php echo $rock['zaradenie']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="farba">Farba:</label>
                                <input type="text" class="form-control" id="farba" name="farba" value="<?php echo $rock['farba']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="zasMineraly">Zastúpenie minerálov v hornine:</label>
                                <textarea class="form-control" id="zasMineraly" name="zasMineraly" rows="4"><?php echo $rock['zas_min']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="stavba">Stavba horniny:</label>
                                <textarea class="form-control" id="stavba" name="stavba" rows="4"><?php echo $rock['stavba']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="naleziska">Výskyty:</label>
                                <textarea class="form-control" id="naleziska" name="naleziska" rows="3"><?php echo $rock['naleziska']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="updateRock" class="btn btn-secondary">Update</button>
                                <button type="submit" name="deleteRock" class="btn btn-danger" onclick="confirmDelete(<?php echo $rock['rock_ID']; ?>)">Delete</button>
                            </div>

                        </div>
                    </div>
                    <?php
                    if (isset($_POST['updateRock'])){
                        $nazov = $_POST['nazov'];
                        $zaradenie = $_POST['zaradenie'];
                        $farba = $_POST['farba'];
                        $zasMineraly = $_POST['zasMineraly'];
                        $stavba = $_POST['stavba'];
                        $naleziska = $_POST['naleziska'];

                    }
                    if (isset($_POST['deleteRock'])){
                        if ($rockObject->deleteRock($rock_id)){
                            echo "Hornina bola vymazaná";
                            header('Location: horniny.php');
                        } else {
                            echo "Nastala chyba pri vymazávaní horniny";
                        }
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

                                if ($rockObject->updatePhoto($rock_id, $filename, $tempname)){
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
<?php ob_end_flush(); ?>
