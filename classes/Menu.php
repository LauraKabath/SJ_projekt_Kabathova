<?php
class Menu {

    private $stranky;

    public function __construct($stranky){
        $this->stranky = $stranky;
    }

    public function generateMenu(): string {
        $menu = '';
        foreach ($this->stranky as $name => $url){
            $menu .= '<a class="nav-link text-white" href="' .$url. '">' .$name. '</a>';
        }

        return $menu;
    }

}