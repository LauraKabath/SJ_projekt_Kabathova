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
                            <h4 class="card-title">Profil</h4>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="meno" class="label">Meno:</label>
                                    <input name="meno" id="meno" type="text" class="form-control" value="<?php echo $userData['meno']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="label">Email:</label>
                                    <input name="email" id="email" type="email" class="form-control" value="<?php echo $userData['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="update_profil" class="button btn btn-secondary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include "parts/footer.php"?>