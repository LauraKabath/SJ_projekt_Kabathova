<?php
require_once(__ROOT__.'/classes/Database.php');
class Menu extends Database {
    public function stylesCSS(){
        $data = json_decode(file_get_contents(__ROOT__ . '/json/data.json'), true);
        $stranka = basename($_SERVER['REQUEST_URI']);
        $stranka = explode(".", $stranka)[0];
        $subory = $data['stranky'][$stranka];
        foreach ($subory as $subor) {
            echo "<link rel='stylesheet' href='$subor'>";
        }
    }
}