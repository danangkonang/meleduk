<?php 
//cekusername("s3Atqser");

function cekusername($username)
{
    $kecil = preg_match('@[a-z]@', $username);//huruf kecil a-z
    $besar = preg_match('@[A-Z]@', $username);//huruf besar A-Z
    $anggka = preg_match('@[0-9]@', $username);//angka 0-9
    $karakter = preg_match('@[^\w]@', $username);//karakter spesial
    $awalan = preg_match('/^[0-9]/', $username); //awalan =
    if(!$kecil || !$besar || !$anggka || strlen($username)<5 || strlen($username)>9 || $karakter || $awalan)
    {
        echo('salah');
    }
    else
    {
        echo('benar');
    }
    
}

cekpassword('sd2ccfAa%=');

function cekpassword($password)
{
    $kecil = preg_match('@[a-z]@', $password);//huruf kecil a-z
    $besar = preg_match('@[A-Z]@', $password);//huruf besar A-Z
    $anggka = preg_match('@[0-9]@', $password);//angka 0-9
    $karakter = preg_match('@[^\w]@', $password);//karakter spesial
    $awalan = preg_match('/^[0-9]/', $password); //awalan 0-9
    $samadengan = preg_match("/=/", $password); //mengandung =
    if(!$kecil || !$besar || !$anggka || strlen($password)<8 || !$karakter || !$samadengan)
    {
        echo('salah');
    }
    else
    {
        echo('benar');
    }
}