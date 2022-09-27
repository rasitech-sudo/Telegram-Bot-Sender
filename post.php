<?php

$token = $_POST['token'];
$id = $_POST['id'];
$pesan = $_POST['pesan'];

if (!empty($token)) {

if (!empty($id)) {

if (!empty($pesan)) {



file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$id&photo=$pesan");

echo "<script>alert('Pesan Terkirim!'); window.location = './';</script>";


} else {
    

echo "<script>alert('Masukan Pesan!'); window.location = './';</script>";


}


} else {
    

echo "<script>alert('Masukan ID Chat!'); window.location = './';</script>";


}


} else {


echo "<script>alert('Masukan Bot Token!'); window.location = './';</script>";


}