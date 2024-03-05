<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Turistika na Muránskej planine">
        <meta name="author" content="Laura Kabáthová">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog - Turistika na Muránskej planine</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <?php include "parts/header.php"?>
        <main>
            <!-- banner s textom -->
            <div class="container mb-5">
                <div class="position-relative text-center">
                    <img src="" alt="" class="img-fluid pt-5">
                    <div class="position-absolute top-50 start-50 translate-middle text-center text-white ">
                        <h1 class="text-uppercase">TEXT</h1>
                    </div>
                </div>
            </div>
            <!-- banner s textom -->
            <section id="blog_clanky">
                <h1 class="text-center mx-5">Zverejnené články</h1>
                    <div class="row mx-5">
                        <article class="clanok_1 p-4" id="blog_1">
                            <h2>Objavujeme tajomstvá hradu Muráň</h2>
                            <p class="text-muted">Zverejnene 24.11. 2023</p>
                            <p> TEXT </p>
                            <a href="blog_1.html" class="artBtn btn rounded-4 text-white">Čítaj viac...</a>
                        </article>
                        <article class="clanok_2 p-4" id="blog_2">
                            <h2>Sysle na Muránskej planine</h2>
                            <p class="text-muted">Zverejnene 26.11. 2023</p>
                            <p>TEXT</p>
                            <a href="blog_2.html" class="artBtn btn rounded-4 text-white">Čítaj viac...</a>
                        </article>
                        <article class="clanok_3 p-4" id="blog_3">
                            <h2>Sysle ako tajomné stvorenia prírody</h2>
                            <p class="text-muted">Zverejnene 27.11. 2023</p>
                            <p> TEXT </p>
                            <a href="blog_3.html" class="artBtn btn rounded-4 text-white">Čítaj viac...</a>
                        </article>
                    </div>
            </section>
            <nav class="nav-pages d-flex justify-content-center my-3">
                <div class="pagination strankovanie">
                  <a class="page-link" href="blog.html">0</a>
                  <a class="page-link" href="blog_1.html">1</a>
                  <a class="page-link" href="blog_2.html">2</a>
                  <a class="page-link" href="blog_3.html">3</a>
                  <a class="page-link" href="blog_1.html">Nasledujúca</a>
                </div>
            </nav>
        </main>
        <?php include "parts/footer.php"?>
    </body>
</html>