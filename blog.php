<!DOCTYPE html>
<html lang="sk">
    <?php include_once "parts/head.php" ?>
    <body>
    <?php include "parts/navigacia.php" ?>
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
                            <a href="blog_1.php" class="artBtn btn rounded-4 text-white">Čítaj viac...</a>
                        </article>
                        <article class="clanok_2 p-4" id="blog_2">
                            <h2>Sysle na Muránskej planine</h2>
                            <p class="text-muted">Zverejnene 26.11. 2023</p>
                            <p>TEXT</p>
                            <a href="blog_2.php" class="artBtn btn rounded-4 text-white">Čítaj viac...</a>
                        </article>
                        <article class="clanok_3 p-4" id="blog_3">
                            <h2>Sysle ako tajomné stvorenia prírody</h2>
                            <p class="text-muted">Zverejnene 27.11. 2023</p>
                            <p> TEXT </p>
                            <a href="blog_3.php" class="artBtn btn rounded-4 text-white">Čítaj viac...</a>
                        </article>
                    </div>
            </section>
            <nav class="nav-pages d-flex justify-content-center my-3">
                <div class="pagination strankovanie">
                  <a class="page-link" href="blog.php">0</a>
                  <a class="page-link" href="blog_1.php">1</a>
                  <a class="page-link" href="blog_2.php">2</a>
                  <a class="page-link" href="blog_3.php">3</a>
                  <a class="page-link" href="blog_1.php">Nasledujúca</a>
                </div>
            </nav>
        </main>
        <?php include "parts/footer.php"?>
    </body>
</html>