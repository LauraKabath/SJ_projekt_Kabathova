<?php
class Menu {

    private $stranky;

    public function __construct($stranky){
        $this->stranky = $stranky;
    }

    public function generateMenu($buttons): string {
        $menu = '';
        foreach ($this->stranky as $name => $url){
            $menu .= '<a class="nav-link text-white" href="' .$url. '">' .$name. '</a>';
        }
        foreach ($buttons as $name => $url){
            $menu .= '<a class="btn btn-outline-dark h-50 my-2" href="' .$url. '">' .$name. '</a>';
        }

        return $menu;
    }

}