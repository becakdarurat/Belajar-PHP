<?php 

    echo 'Name :';
    echo ' Sofyan Tanjung';
    echo "\n";

    echo "Nama :";
    echo "Sofyan\t Tanjung\t Sibolga\n";

    // Heredoc fitur membuat string yang panjang, sehingga kita tidak manual melakukan enter , tab dan yang lain lain
    echo <<<EKO
        Ini adalah contoh string yang sangat
        panjang, dan juga gak perlu ngetik ENTER secara
        manual, "bisa quote" juga
    EKO;

    