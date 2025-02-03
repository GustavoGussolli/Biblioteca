<?php

require_once("Livro.php");

class LivroFisico extends Livro {

    public function getTipo() {
        return "Físico";
    }
}