<?php
    $buah = ["mangga", "nanas", "leci", "anggur"];
    echo $buah[1];

    echo "<br/>jumlah buah ada : " . count($buah);

    //menampilkan seluruh buah
    echo "<ol>";
    foreach ($buah as $b) {
        echo "<li>" . $b . "</li>";
    }
    echo "<ol>";

    //menambah buah
    $buah[] = "apel";

    //menghapus buah index ke 1
    unset($buah[1]);

    // ubah buah index ke 2 menjadi Manggis
    $buah[2] = "manggis";

    // cetak seluruh buah dengan index nya
    echo "<ul>";
    foreach ($buah as $k => $v) {
        echo "<li> buah index - " .$k. " adalah " .$v. "</li>";
    }

    echo "</ul>";
    echo "<br/>";
    echo "<ul>";
    sort($buah);
    
    foreach ($buah as $k => $v) {
        echo "<li> buah index - " .$k. " adalah" .$v. "</li>";
    }
    echo "</ul>";
?>