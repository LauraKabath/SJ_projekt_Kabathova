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
            <form action="" method="POST">
                <div class="row justify-content-center">
                    <div class="col-md-6">
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
                            <input type="text" class="form-control" id="zasMineraly" name="zasMineraly">
                        </div>
                        <div class="form-group">
                            <label for="stavba">Stavba horniny:</label>
                            <textarea class="form-control" id="stavba" name="stavba" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="naleziska">Výskyty:</label>
                            <textarea class="form-control" id="naleziska" name="naleziska" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="updateRock" class="btn btn-secondary">Update</button>
                            <button type="submit" name="deleteRock" class="btn btn-danger">Delete</button>
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
                ?>
            </form>
        </section>
    </main>
<?php include "parts/footer.php"?>