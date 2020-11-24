<?php

 
    $bc_url = "$url/merchant/$guid/login?password=$password&api_code=$api_key";
    

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, $bc_url);
    $ccc = curl_exec($ch);
    $json = json_decode($ccc, true);

    dd($json);