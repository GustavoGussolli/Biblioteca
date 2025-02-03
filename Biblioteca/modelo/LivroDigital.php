<?php

require_once("Livro.php");

class LivroDigital extends Livro {

    public function getTipo() {
        return "Digital";
    }
}