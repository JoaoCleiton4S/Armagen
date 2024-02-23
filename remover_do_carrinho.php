<?php
session_start();
include 'backend.php';

if(isset($_POST['produto_id'])) {
    $produto_id = $_POST['produto_id'];

    header('Location: carrinho.php');
    exit;
} else {
    header('Location: carrinho.php');
    exit;
}
?>
