<?php include_once "parts/head.php";
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: prihlasenie.php");
    exit;
}
$user = new User();
$userData = $user->getUserInfo($_SESSION['user_id']);
?>
<body>
<?php include "parts/navigacia.php" ?>
    <main>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Zmena hesla</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="oldPassword" class="label">Staré heslo:</label>
                                    <div class="password-input">
                                        <input name="oldPassword" id="oldPassword" type="password" class="form-control" value="">
                                        <span class="toggle-password" onclick="togglePasswordVisibility('oldPassword')">Show</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NewPassword" class="label">Nové heslo: </label>
                                    <div class="password-input">
                                        <input name="NewPassword" id="NewPassword" type="password" class="form-control" value="">
                                        <span class="toggle-password" onclick="togglePasswordVisibility('NewPassword')">Show</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ReapeatedNew" class="label">Zopakujte heslo:</label>
                                    <div class="password-input">
                                        <input name="ReapeatedNew" id="ReapeatedNew" type="password" class="form-control" value="">
                                        <span class="toggle-password" onclick="togglePasswordVisibility('ReapeatedNew')">Show</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="change_password" class="button btn btn-secondary">Zmeniť</button>
                                </div>
                                <?php
                                if (isset($_POST['change_password'])){
                                    $oldPassword = $_POST['oldPassword'];
                                    $NewPassword = $_POST['NewPassword'];
                                    $ReapeatedNew = $_POST['ReapeatedNew'];
                                    $id = $userData['uzi_ID'];
                                    if ($user->changePassword($id, $oldPassword, $NewPassword, $ReapeatedNew)){
                                        echo "Vaše heslo bolo úspešne zmenené!";
                                    } else {
                                        echo "Nastala chyba pri zmene vášho hesla";
                                    }
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "parts/footer.php"?>