<?php 
session_start();

if(isset($_SESSION['email']) or isset($_SESSION['id'])){
    
    unset($_SESSION['email']);
    session_destroy();

    unset($_SESSION['id']);
    session_destroy();

    header('location:../index.php');

}else{
    header('location:../index.php');
}


