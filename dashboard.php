<?php include_once "parts/head.php";
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: prihlasenie.php");
    exit;
}
// $user_id
?>

<body>
<?php include "parts/navigacia.php" ?>
<main>
    <section>
        <h1>Vitaj, user!</h1>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </section>
</main>
<?php include "parts/footer.php"?>