<?php
    require_once('db_config.php');
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Minerály a horniny">
    <meta name="author" content="Laura Kabáthová">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minerály a horniny</title>
    <?php
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        $pages = new Page();
        $pages->set_name($page_name);
        echo($pages->add_stylesCSS());
    ?>
</head>
