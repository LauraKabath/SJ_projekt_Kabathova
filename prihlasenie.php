<!DOCTYPE html>
<html lang="sk">
<?php include_once "parts/head.php" ?>
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
                                <a href="?tab=prihlasenie" class="nav-link <?php echo isset($_GET['tab']) && $_GET['tab'] === 'prihlasenie' ? 'active' : ''; ?>">Prihlásenie</a>
                            </li>
                            <li class="nav-item">
                                <a href="?tab=registracia" class="nav-link <?php echo isset($_GET['tab']) && $_GET['tab'] === 'registracia' ? 'active' : ''; ?>">Registrácia</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_GET['tab']) && $_GET['tab'] === 'prihlasenie'): ?>
                        <div class="login-form">
                            <div class="prihlasenie-form">
                                <div class="form-group">
                                    <label for="username" class="label">Meno: </label>
                                    <input id="username" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Heslo: </label>
                                    <input id="password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button btn btn-secondary">Prihlásiť</button>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="login-form">
                            <div class="registracia-form">
                                <div class="form-group">
                                    <label for="username" class="label">Meno: </label>
                                    <input id="username" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Heslo: </label>
                                    <input id="password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Zopakujte heslo: </label>
                                    <input id="password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="label">Email: </label>
                                    <input id="email" type="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button btn btn-secondary">Registrovať</button>
                                </div>
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
</body>
</html>
