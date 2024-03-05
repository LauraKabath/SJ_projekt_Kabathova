<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Turistika na Muránskej planine">
        <meta name="author" content="Laura Kabáthová">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galéria - Turistika na Muránskej planine</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <?php include "parts/header.php"?>
        <main>
            <!-- kreativny bod: lightboxgallery -->
            <h1 class="text-center">Fotogaléria</h1>
            <div class="container m-5 ">
                <div class="lightgallery">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_kuki.jpg" alt="sysel sa obzera" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_mrk.jpg" alt="sysel chrume mrkvu" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_papa.jpg" alt="sysel obeduje" class="img-fluid p-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-5">
                <div class="lightboxgallery">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_piskota.jpg" alt="sysle maju piskotu" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_vykuka.jpg" alt="sysel v diere" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_mrkva.jpg" alt="sysel si vychutnava mrkvu" class="img-fluid p-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container m-5">
                <div class="lightboxgallery">
                    <div class="container">
                        <div class="row mb-4">
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_sam_pri_piskotach.jpg" alt="sysel sam pri piskotach" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_skrceny.jpg" alt="sysel skrceny na zemi" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="img/g_sys_zbiera.jpg" alt="sysel zbiera material" class="img-fluid p-5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                    <!-- modal -->
                    <div class="modal fade" id="Modal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="img" alt="Modal Image" id="lightboxImage" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- kreativny bod: lightboxgallery -->
        </main>
        <?php include "parts/footer.php"?>
    </body>
</html>