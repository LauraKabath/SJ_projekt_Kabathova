<!DOCTYPE html>
<html lang="sk">
    <?php include_once "parts/head.php" ?>
    <body>
    <?php include "parts/navigacia.php" ?>
        <main>
                <div class="row mt-5">
                    <article class="clanok_3 p-4">
                        <h2><strong>Sysle ako tajomné stvorenia prírody</strong></h2>
                        <p class="text-muted">Zverejnené 27.11. 2023</p>
                        <p class="mt-4">&emsp;Sysle vytvárajú unikátnu súčasť ekosystému a hoci sú drobné a občas ťažko nájdené, ich prítomnosť má hlboký vplyv na podobu slovenskej prírody.</p>
                        <!-- akordeon -->
                        <div class="accordion mb-5" id="accordion">
                            <div class="accordion-item mx-2">
                              <button class="accordion-button collapsed bg-success bg-opacity-75" type="button" data-bs-toggle="collapse" data-bs-target="#akord-one"><strong>Život sysľov</strong></button>
                              <div id="akord-one" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                <div class="accordion-text mx-4">
                                    <p>TEXT</p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item mx-2">
                              <button class="accordion-button collapsed bg-success bg-opacity-50" type="button" data-bs-toggle="collapse" data-bs-target="#akord-two"><strong>Význam v ekosystéme</strong></button>
                              <div id="akord-two" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-text mx-4">
                                    <p>akord1
                                    </p>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item mx-2">
                              <button class="accordion-button collapsed bg-success bg-opacity-25" type="button" data-bs-toggle="collapse" data-bs-target="#akord-three"><strong>Ohrozenie a ochrana</strong></button>
                              <div id="akord-three" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                <div class="accordion-text mx-4">
                                    <p>akord2
                                    </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        <!-- akordeon -->
                    
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="" alt="" class="img-fluid p-2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="" alt="" class="img-fluid p-2">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img src="" alt="" class="img-fluid p-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            <nav class="nav-pages d-flex justify-content-center my-3">
                <div class="pagination strankovanie">
                  <a class="page-link" href="blog_2.php">Predchádzajúca</a>
                  <a class="page-link" href="blog.php">0</a>
                  <a class="page-link" href="blog_1.php">1</a>
                  <a class="page-link" href="blog_2.php">2</a>
                  <a class="page-link" href="blog_3.php">3</a>
                  </div>
            </nav>
        </main>
        <?php include "parts/footer.php"?>
    </body>
</html>