var red   = document.querySelector('input[name=red]');
var green = document.querySelector('input[name=green]');
var blue = document.querySelector('input[name=blue]');
function warna (elemen,elemen1,elemen2){
   var vred   = elemen.value;
   var vgreen = elemen1.value;
   var vblue = elemen2.value;
    document.body.style.backgroundColor = 'rgb('+vred+','+vgreen+','+vblue+') ';
}

red.addEventListener('input', function (){warna(red,green,blue)} )
green.addEventListener('input', function (){warna(red,green,blue)} )
blue.addEventListener('input', function (){warna(red,green,blue)} )

// deklarasi elemen
var merah   = document.querySelector('input[name=merah]');
var hijau = document.querySelector('input[name=hijau]');
var biru = document.querySelector('input[name=biru]');

// buat fungsi dapatakan nilai 
function color (elemen,elemen1,elemen2){
    var div    = document.getElementById('div1');
    var vmerah = elemen.value;
    var vhijau = elemen1.value;
    var vbiru  = elemen2.value;
     div.style.backgroundColor = 'rgb('+vmerah+','+vhijau+','+vbiru+') ';
 }

// set nilai elemen
merah.addEventListener('input', function(){color(merah,hijau,biru)});
hijau.addEventListener('input', function(){color(merah,hijau,biru)});
biru.addEventListener('input', function(){color(merah,hijau,biru)});

/* dom traversal adalah cara mengakses antar elemen , seperti dari Parent -> Child , Child -> parent , element -> siblings
   element.parentElement  mencari parent pertama dari suatu elemen , ini penting contoh untuk set display none pada 
   container , dimana kita mentargetka .close pada container bukan pada elemen tersebut
*/  
var tutup = document.querySelector('span');
var card  = document.querySelector('.card');
var tutupp = document.getElementById('card');

tutup.addEventListener("click", function(){
    card.parentElement.style.display = 'none';
})

     