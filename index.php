<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Turistika na Muránskej planine">
        <meta name="author" content="Laura Kabáthová">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Turistika na Muránskej planine</title>
        <link rel="icon" type="image/x-icon" href="img/sys_fat.jpg">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php include "parts/header.php"?>
        <!-- carousel/slideshow -->
        <div id="carousel" class="carousel slide my-4 mx-5 h-25">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#carousel" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="" class="img-fluid d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="" class="img-fluid d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="" class="img-fluid d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="" class="img-fluid d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev mx-5" type="button" data-bs-target="#carousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next mx-5" type="button" data-bs-target="#carousel" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
        </div>
        <!-- carousel/slideshow -->
        <main class="mt-3">
            <!-- Prva sekcia:-->
            <section id="domov">
                <h1 class="mx-2"></h1>
                <div class="mx-4">
                    <p>TEXT</p>
                </div>
            </section>
            <!-- Prva sekcia: -->
        </main>
        <div id="cookie-popup" class="fixed-bottom bg-dark text-white text-center p-2">
            &#127850;
            Táto webová stránka používa súbory cookie, aby sme vám zabezpečili čo najlepší zážitok z našej webovej stránky.
            <button type="button" class="btn btn-light btn-sm" onclick="accept()">Rozumiem!</button>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>