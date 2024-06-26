<?php ob_start(); ?>
<?php
include_once "parts/head.php";
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header('Location: dashboard.php');
}
?>
<body>
<?php include "parts/navigacia.php" ?>
<main>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a href="?tab=prihlasenie" class="nav-link <?php echo !isset($_GET['tab']) || $_GET['tab'] === 'prihlasenie' ? 'active' : ''; ?>">Prihlásenie</a>
                            </li>
                            <li class="nav-item">
                                <a href="?tab=registracia" class="nav-link <?php echo isset($_GET['tab']) && $_GET['tab'] === 'registracia' ? 'active' : ''; ?>">Registrácia</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <?php if(!isset($_GET['tab']) || $_GET['tab'] === 'prihlasenie'): ?>
                            <div class="login-form">
                                <div class="prihlasenie-form">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="meno" class="label">Prihlasovacie meno: </label>
                                            <input name="meno" id="meno" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="heslo" class="label">Heslo: </label>
                                            <div class="password-input">
                                                <input name="heslo" id="heslo" type="password" class="form-control">
                                                <span class="toggle-password" onclick="togglePasswordVisibility('heslo')">Show</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="login" class="button btn btn-secondary">Prihlásiť</button>
                                        </div>
                                    </form>
                                    <?php

                                    if (isset($_POST['login'])) {
                                        $meno = $_POST['meno'];
                                        $heslo = $_POST['heslo'];

                                        $login = new Login();

                                        $user = $login->login($meno, $heslo);

                                        if ($user === true) {
                                            header("Location: dashboard.php");
                                            exit();
                                        } elseif ($user === false) {
                                            echo "Nesprávne prihlasovacie meno alebo heslo!";
                                        } elseif ($user === "neregistrovany") {
                                            echo "Užívateľ sa nenašiel. Prosím zaregistrujte sa.";
                                            echo '<a class="btn btn-outline-secondary h-50 my-2" href="prihlasenie.php?tab=registracia">Registrácia</a>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="login-form">
                                <div class="registracia-form">
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label for="meno" class="label">Prihlasovacie meno: </label>
                                            <input name="meno" id="meno" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="heslo" class="label">Heslo: </label>
                                            <div class="password-input">
                                                <input name="heslo" id="heslo" type="password" class="form-control">
                                                <span class="toggle-password" onclick="togglePasswordVisibility('heslo')">Show</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="repeat_heslo" class="label">Zopakujte heslo: </label>
                                            <div class="password-input">
                                                <input name="repeat_heslo" id="repeat_heslo" type="password" class="form-control">
                                                <span class="toggle-password" onclick="togglePasswordVisibility('repeat_heslo')">Show</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="label">Email: </label>
                                            <input name="email" id="email" type="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="register" class="button btn btn-secondary">Registrovať</button>
                                        </div>
                                    </form>
                                    <?php

                                    if (isset($_POST['register'])){
                                        $meno = $_POST['meno'];
                                        $heslo = $_POST['heslo'];
                                        $repeatHeslo = $_POST['repeat_heslo'];
                                        $email = $_POST['email'];

                                        $login = new Login();
                                        if ($login->register($meno, $heslo, $repeatHeslo, $email)) {
                                            echo "Registracia bola uspesna!";
                                        } else {
                                            echo "Hesla sa nezhoduju!";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "parts/footer.php"?>
<?php ob_end_flush(); ?>
