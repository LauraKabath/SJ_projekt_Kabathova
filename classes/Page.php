<?php
class Page {
    private $name;

    public function set_name($name){
        $this->name = $name;
    }

    public function add_stylesCSS(){
        $css = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';

        switch ($this->name){
            case 'kontakt':
                $css .= '<link rel="stylesheet" href="css/kontakt.css">';
                break;
            case 'thank_you':
                $css .= '<link rel="stylesheet" href="css/thankyou.css">';
                break;
            case 'password_change':
            case 'prihlasenie':
                $css .= '<link rel="stylesheet" href="css/cards.css">';
                break;
        }

        return $css;
    }

}