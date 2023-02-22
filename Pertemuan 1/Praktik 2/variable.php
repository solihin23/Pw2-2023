<?php
    /* 
        variable Sistem 
        Variable built in PHP (varaible yang sudah ada di PHP)
    */
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br><br>";

    /*
        Variable User
        Variable yang dibuat oleh user
    */
    $name = "Solihin";
    $age = 20;
    $weight = 49;

    echo "Nama saya adalah $name";

    /*
    Variable konstan
    Variable yang tidak bisa diubah nilainya
    1. Menggunakan define | define("fruit","apple");
    2. Menggunakan const | const 
    fruit = "apple";
    */
    echo "<br><br>";

    define("SITE_NAME", "Elena");
    echo SITE_NAME;
?>