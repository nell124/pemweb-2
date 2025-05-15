<?php
require_once __DIR__ .'/../models/pemesanan.php';
use models\Pesanan;

if(!isset($_GET['id'])) {
    header("Location: list-pemesanan.php");
    exit;
}

$user = pesanan::find($_GET['id']);

if(!$user) {
    header("Location: list_pemesanan.php");
    exit;

}

Pesanan::delete($user['id']);
header("Location: list-pemesanan.php");

?>