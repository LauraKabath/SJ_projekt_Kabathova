<header>
    <!-- navigacia -->
    <nav class="navbar navbar-expand-lg fixed-top bg-secondary" data-bs-theme="dark">
        <div class="container-fluid text-center">
            <!-- logo -->
            <a class="navbar-brand text-uppercase text-white" href="index.php">
                <img src="img/stranka_logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Minerály a horniny
            </a>
            <!-- logo -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse text-uppercase" id="navbarcollapse">
                        <div class="navbar-nav mx-auto">
                            <?php
                                $stranky = array('Domov'=> 'index.php',
                                    'O nás' => 'o_nas.php',
                                    'Minerály' => 'mineraly.php',
                                    'Horniny' => 'horniny.php',
                                    'Kontakt' => 'kontakt.php'
                                );
                                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                                    $stranky['Profil'] = 'dashboard.php';
                                    $buttons = array('Logout' => 'odhlasenie.php');
                                } else {
                                    $buttons = array('Login' => 'prihlasenie.php');
                                }
                                $menu_pages = new Menu($stranky);

                                echo($menu_pages->generateMenu($buttons));

                            ?>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- navigacia -->
        </header>