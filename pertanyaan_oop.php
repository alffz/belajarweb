<?php
// jumat 25-12-2020
/*
1. kenapa objek yang diberi nilai berbeda pada parameternya tetap menampilkan nilai default?
    contoh 
        $objek->cirihewan() . ini seharusnya menampilkan nilai default 
        $objek->cirihewan('mamalia','4','coklat','darat') seharusnya ini menampilan nilai yang ada di parameter , ttpi kenyataanya tidak 
            MENGAPA?

        Jawaban 
        ternyata nilai dari parameter itu seharusnya diletakkan di objek saat instansi bukan di dalam method 
            benar => $objek = new hewan('mamalia','4','coklat','darat')
                     $objek->cirihewan(); akan menampilkan parameter yang diinputkna 

            salah => $objek = new hewan();
                     $objek->cirihwan('mamalia','4','coklat','darat') ; akan menampilkan nilai default dari class
*/