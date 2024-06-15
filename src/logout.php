<?php

if(!isset($_SESSION)){

    session_start();

}

header('Location: https:/localhost:8000/');

session_destroy();