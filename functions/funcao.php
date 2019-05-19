<?php
function autoload(){
    if(isset($_GET['ler'])){
        require './pages/ler/index.php';
    } else{
        require './pages/home/index.php';
    }
}