<?php include_once "parts/head.php" ?>
<body>
<?php include "parts/navigacia.php" ?>
<main>
    <section>
        <?php
           unset($_SESSION['logged_in']);
           unset($_SESSION['user_id']);
           header('Location: prihlasenie.php');
        ?>
    </section>
</main>
<?php include "parts/footer.php"?>