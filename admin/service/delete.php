<?php

session_start();
include("../../core/functions.php");

if (!isset($_GET['id'])) {
  header('Location: ./index.php');
}

$layanan = find("layanan", $_GET['id']);
$result = delete("layanan", $_GET['id']);

flash("{$layanan['nama']} berhasil dihapus!", "success");
header("Location: ./index.php");
