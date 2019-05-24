<?php
function autoload(){
    if(isset($_GET['ler'])){
        require './pages/ler/index.php';
    } else if(isset($_GET['install'])){
        require './pages/install/index.php';
    }else{
        require './pages/home/index.php';
    }
}