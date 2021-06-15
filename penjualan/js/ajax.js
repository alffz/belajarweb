//rekam imput user dari form
var cari   = document.getElementById('cari');
var tombol = document.getElementById('tombol'); // apa fungsi tombol kalok gak digunakan?
var tabel  = document.getElementById('tabel');
var texte  = document.getElementById('textera');

$(document).ready(function(){
    // jquery cari tag dng id='cari' dan gunaka event 'keyup' kemudian jalankan fungsi
    $("#carii").on('keyup',function(){
        // isi tag dgn id='tabel' berdasarkan sumber dari "serch_ajax.php?cari=" 
        // dan ganti isinya dgn apapun yg diketikkan di tag dgn id='cari' ($("#cari").val()))
        $("#tabel").load("serch_ajax.php?cari=" + $("#carii").val());
    })

})

// triger menggunakan even 
// cari elemen tombol lalu tambahkan even berikut (klik,mousover,keypress,keyup dll)
cari.addEventListener('keyup',function(){
    // untuk debugging
    console.log(cari.value); 

    // buat objek ajax
    var ajax = new XMLHttpRequest();
    var tabell =tabel.innerHTML = ajax.responseText;
    // cek apakah sumber data siap gunakkan onreadystatechange
    ajax.onreadystatechange =    function (){
        // cek sumber dgn readyState dan HTTP Request status 
        if(ajax.readyState == 4 && ajax.status == 200){
            // isi tag dgn id='tabel' denga apapun hasil dari sumber_data (serch_ajax.php)
            if (tabell==null){
                tabell=tebel.innerHTML= "data gak ada";
            }
            else{
                tabell=tabel.innerHTML = ajax.responseText;
            }

        }
    }
//     // eksekusi ajax dgn open("method","sumber_data" true/false) true = asyncronus , false = syncronus
//     // sumber = GET atau POST
//     // sumber_data = file yang jadi sumber seperti index.php home.html dll
//     // true = asyncronus , false = syncronus
//     // cari.value menagkap  cari.addEventListener('keyup'
    ajax.open('post','serch_ajax.php?cari=' + cari.value, true);
    ajax.send();
});

// menggunakan Jquery

