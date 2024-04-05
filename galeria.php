<!DOCTYPE html>
<html lang="sk">
    <?php include_once "parts/head.php" ?>
    <body>
        <header>
            <?php include "parts/navigacia.php" ?>
        <main>
            <!-- lightboxgallery -->
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
                                    <img src="" alt="sysle maju piskotu" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="" alt="sysel v diere" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="" alt="sysel si vychutnava mrkvu" class="img-fluid p-5">
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
                                    <img src="" alt="sysel sam pri piskotach" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="" alt="sysel skrceny na zemi" class="img-fluid p-5">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#Modal">
                                    <img src="" alt="sysel zbiera material" class="img-fluid p-5">
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
            <!-- lightboxgallery -->
        </main>
        <?php include "parts/footer.php"?>
    </body>
</html>