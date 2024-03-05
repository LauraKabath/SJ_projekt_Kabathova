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
                  <a class="page-link" href="blog_2.html">Predchádzajúca</a>
                  <a class="page-link" href="blog.html">0</a>
                  <a class="page-link" href="blog_1.html">1</a>
                  <a class="page-link" href="blog_2.html">2</a>
                  <a class="page-link" href="blog_3.html">3</a>
                  </div>
            </nav>
        </main>
        <?php include "parts/footer.php"?>
    </body>
</html>