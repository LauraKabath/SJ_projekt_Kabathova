<!DOCTYPE html>
<html lang="sk">
<?php include_once "parts/head.php";
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: prihlasenie.php");
    exit;
}
// $user_id
?>

<body>
<?php include "parts/navigacia.php" ?>
<main>
    <section>
        <h1>Vitaj, user!</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="" class="card-img-top" alt="mineral">
                        <div class="card-body">
                            <h3 class="card-title text-center">Názov</h3>
                            <p class="card-text"><strong>Popis: </strong></p>
                            <p class="card-text"><strong>Použitie: </strong></p>
                            <p class="card-text"><strong>Výskyt: </strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include "parts/footer.php"?>
</body>
</html>