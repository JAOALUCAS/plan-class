<?php

if(!isset($_SESSION)){
    
    session_start();

}

if(!isset($_SESSION['nome'])){

    die("Você não pode acessar pois não está logado.");

}