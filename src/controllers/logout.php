<?php

if(!isset($_SESSION)){

    session_start();

}

header('Location: http:/localhost:8000/');

session_destroy();
