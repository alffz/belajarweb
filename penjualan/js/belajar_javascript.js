   // // merubah berdasarkan id

   //    //
   // var container = document.getElementById('container');
   // container.style.backgroundColor='green';
   // //
   // var div3 = document.getElementById('containerr');
   //    div3.style.backgroundColor='green';
   // var   div3c = div3.getElementsByTagName('p');
   //     div3c[1].style.cssText ='border-style:solid;';

   // // merubah berdasrkan class
   // var cont1   = document.getElementsByClassName('cont1');
   // cont1[0].style.color ='yellow';
   // cont1[1].style.color = 'magenta';

   // // merubah berdasarkan tagName
   // var div = document.getElementsByTagName('div');
   // div[1].style.display  = 'block'; // menyembunyikan div ke 2
   // var paragraf = document.getElementsByTagName('p');
   // paragraf[0].innerHTML ='paragraf pertama dari id container pertama telah diubah';
   // paragraf[2].innerHTML += new Date(). getFullYear();
   // paragraf[5].innerHTML += new Date(). getFullYear();

   // // merubah berdasarkan TagName terbatas pada element tertentu brdsrkan id
   // // memanggil tag parent -> id='container 
   // var paren = document.getElementById('container');
   // // memanggil tag <p> yang ada di dalam id='container'. ini hanya akan memanggil
   // // <p> di dalam parent (<div id='container'>) , diluar itu tidak terdefinisi , dalam hal ini ada 2 <p> 
   // // maka indexnye berurut 0,1 
   // var child = paren.getElementsByTagName('p');
   //    child[0].style.cssText='color:blue; font-size:20px;';
   //    child[2].style.cssText='color:white; font-size:20px;';


   // // merubah id='container' 
   // function udiv(){
   //    var udiv = document.querySelectorAll('div');
   //       udiv[0].style.cssText +='border-style: dotted;';
   // }// case gagal ubah beberapa element seka vcligus !!


   // // memenggi tag <p> ke 4 tag paragraf ini di luar <div id='container'> namun indexnya 
   // // tetap ke 4 
   // document.getElementsByTagName('p')[3].style.cssText= 'color:blue;';

   // // mencari dengan querySelector , akan mencari selector Css pertama pada element dan mengabaikan selector
   // // lainnya

   // var div = document.querySelectorAll('p');
   //    div[2].style.cssText='border-style: solid';

   // var divv = document.querySelectorAll('d1p1');
   //   // divv.style.cssText='border-style: solid'
   //   var paren = document.getElementById('container');
   // // memanggil tag <p> yang ada di dalam id='container'. ini hanya akan memanggil
   // // <p> di dalam parent (<div id='container'>) , diluar itu tidak terdefinisi , dalam hal ini ada 2 <p> 
   // // maka indexnye berurut 0,1 


   // var div4 = document.getElementById('div4');
   //    div4.style.backgroundColor='blue';
   // var div4c = div4.getElementsByTagName('p');
   //    div4c[1].style.cssText ='border-style:solid;';

// UNPAS 
var tombol = document.getElementById('judull');
tombol.onclick = function (){
   var r = Math.round(Math.random() * 255 + 1);
   var g = Math.round(Math.random() * 255 + 1);
   var b = Math.round(Math.random() * 255 + 1);
   document.body.style.backgroundColor='rgb('+ r +','+ g +','+ b +')';
}


// const judul = document.getElementById('judul')
//    judul.style.cssText='color:red ; border-style: dotted; background-color:magenta;';

const p1 = document.getElementsByClassName('p1');
      p1[3].innerHTML ='GANTI';
// memanggil id='pertama' , jika terdapat lebih dari 1 id='pertama'  maka id berikutnya diabaikan
var p1a = document.getElementById('pertama');
var p1ac = p1a.getElementsByTagName('p');
   p1ac[2].style.cssText = "color:blue";
/* mencari element / tertuentu terbatas didalam sebuah elemen 
   contoh : 
      mencari tag <p> pada < div ='kedua'> ,
      1.  seleksi div nya -> var seleksi = document.getElementById('kedua');
      2. tambahkan hasil seleksi div sebelum memanggil elemen yang ada didalamnya 
         -> var elemen_child = seleksi.getElementsByTagName('p');
      3. getElementsByTagName akan menghasilkan HTMLCollaction , gunakan index array untuk memanggil 
         elemen yang ada di dalamnya walaupun elemennya hanya satu. index mulai dari 0
            elemen_child[0].innerHTML ='paragraf pertama dari div kedua';
      <div ='pertama'>
            <p> 
            <p> 
            <p> 
      </div>

      <div ='kedua'>
            <p> paragraf pertama dari div kedua </p>
            <p> 
            <p> 
      </div>
*/
//pilih elemen dgn id='kedua'
var section = document.getElementById("kedua");
// pilih tag <li> pada elemen dgn id='kedua'
var sect_cld = section.getElementsByTagName('li');
   // panggil tag <li> ke 2 yg ada di dalam elemen dgn id='kedua' dan isi dgn "style.cssText='color:red; border-style: dotted;'" 
   sect_cld[1].style.cssText='color:red; border-style: dotted;'

var select = section.querySelector('li');
    select.style.cssText='color:green';

var select1 = document.querySelector('h1').style.cssText += 'color:green';
var select2 = document.querySelector('ul').getElementsByTagName('li');


// merubah attribut <tag> , digunakan untuk merubah atribut dalam sebuah id, name, value, calss dll
// element.setAttribute('nama_atribute' , 'nilai_atribute')
// contoh menambah class pada tag <p> yg ada di <section id='pertama'>
// element.setAttribute('atribut','nilai_atribute')
var paragraf1 = p1a.getElementsByTagName('p');
   paragraf1[0].setAttribute('class','paragraf1');

// mencrari nilai dari sebuah atribut 
// element.getAttribute('nama_atribut');
// apa nama attribut class tag <p> yg ada di <section id='pertama'> ?
   paragraf1[0].getAttribute('class');// paragraf1 

// classList() , method khusu untuk memodifikasi class yang punya lebih dari 1 nilai
// dimana settAttribute() gak cocok untuk class karena mengganti atribut dan nilainya sekaligus

// classList.add("nilai_class") -> menambah class 
// tambah class untuk tag <p> yg ada di <section id='pertama'> 
   paragraf1[0].classList.add('class_baru')
   // menambahkan lebih dari 1 class secara bersamaan . gunakan ,(koma) antar class
   paragraf1[0].classList.add('class1','class2','class3')

// classList.remove('nilai_class') -> manghapus nilai class
   paragraf1[0].classList.remove('class1');

// classList.item('nilai_class') ->mencari  class dalam sebuah elemen , akses menggunakan index array
   paragraf1[1].classList.item('class_baru');

   function myFunction() {
      var x = document.getElementById("myDIV");
    
      if (x.classList.contains("mystyle")) {
        x.classList.remove("anotherClass");
      } else {
        alert("Could not find it.");
      }
    }
   
   // function myFunction1() {
   //    var x = document.getElementById("container3");
   //    var xc = x.getElementsByTagName('li');
   //       if( x.classList.contains('pertama')){
   //          x.classList.remove('pertama');
   //       }
   //       else{
   //             alert('gak ada')
   //       }
   // }

// mengganti warna div tertarget jika tombol diklik
function myFunction1(){
   var x    = document.getElementById("container3");
   var xc   = x.querySelectorAll('li');
   if(xc[0].classList.contains('pertama')){
      xc[0].classList.add('ke5');
   }
}

function myFunction12(){
   var x = document.getElementById('myDIV');
      x.classList.add('warna')
   
}

// fungsi merubah beberapa elemen sekaligus dgn perulangan
function ubah_sekaligus(){
var kedua = document.getElementById('keduaa');
var keduac= kedua.getElementsByTagName('li');
var i;
for( i=0; i<=keduac.length; i++ ){
   keduac[i].style.cssText= 'color:red';
}
}


// membuat elemen dan isinya serta meletakkan pada elemen tertentu
// buat elemennya
var p       = document.createElement('p');
// membuat isi elemen  , proses ini belum berkaitan langsung dgn elemen p.
var isi_p   = document.createTextNode('paragraf terakhir');
// masukkan isi_p kedalam elemen p
p.appendChild(isi_p)
/* sampai sini proses pembuatan elemen dan isinya sudah selesai , namun belum
   ditentukan dimana hasilnya akan ditampilkan */

// meletakkan hasil diatas kedalam elemen dgn id='keduaa'
var section2   = document.getElementById('keduaa');
// appendchild(element) -> meletakkan hasil di akhir elemen parent
section2.appendChild(p)

// membuat elemen baru
var li = document.createElement('li')
li.appendChild(isi_p);
// meletakkan hasil elemen crated di posisi tertentu
// pilih elemen <ul> pada elemen <section id='ketiga'> #mencari_id
var selection = document.querySelector('section#ketiga ul');
// letakan di elment <li> ke 2 , gunakan selector Css nth-child(index elemen)
var posisi   = selection.querySelector('li:nth-child(2)');// index nth-child mulai dari 1
// meletakkan elemen insertBefore(elemen_baru, disimpan_sebelum_sebuah_elemen )
selection.insertBefore(li,posisi);

// document.getElementById('judul').remove();

// meenghapus elemen dgn mengakses parent nya
 var parent = document.getElementById('container');
 var parentc= parent.getElementsByTagName('p');
//    parentc[0].remove();
var list = document.getElementById('ke4');
/*menghapus elemen dgn parent.removeChild(parent,childNode[index ke 0])
  kelemahan -> karena bersifat nodelist maka whitspace dan text pun memiliki index
               maka kurang efisian untuk menghapus elemen secara keseluruhan , karena
               kita harus menghapus index2 tersebut terlebih dahulu. 

*/
function hapuschild(){
var list = document.getElementById('ke4');
var listc= list.getElementsByTagName('p');
   list.removeChild(list.childNodes[1]);
}
//untuk menghapus langsung ke elemen -> parent.removeChild(parent_child[index ke 0])
function hapuschild1(){
   var list = document.getElementById('ke4');
   var listc= list.getElementsByTagName('p');
      list.removeChild(listc[0]);
   }
   /* gak jalan 
      function setatribut (elemen,nilai_el){
         for (var key in nilai_el){
            elemen.setatribut(key,nilai_el[key]);
         }
   */ 
 
   // tambahin elemen beserta atribute dan nilai_atributnya 
   function tambahchild() {
      var list1 = document.getElementById("ke4");
      var newp  = document.createElement('input');
      var isip  = document.createTextNode('');
      var posisi= list1.querySelector('button');   
      // buat class 
      var clas  = newp.classList.add('ke5','anotherClass');
      /* buat atribute hasilnya -> <p id='per' name='input'> . bisa juga menggunakan fungsi 
         setatribut(newp,{'id':'per','class':'ke5','name':'input'}); GAK JALAN
      */      
      var attr  = newp.setAttribute('id','per');
      var attr1 = newp.setAttribute('name','input');
      newp.appendChild(isip);            
      //var classp= newp.className('.ke5');
      // tambahkan <p> sebelum <button>
      list1.insertBefore(newp,posisi);      
  }
  // nambahin attribute sekaligus dgn fungsi 


  // mengganti sebuah elemen dgn elemen lainnya 
  // parent.replaceChild(elemen_baru, elemen_lama)

  var elemenbaru = document.createElement('p');
  var isi        = document.createTextNode('paragraf p terbaru');
      elemenbaru.appendChild(isi);
  var divv4      = document.getElementById('ke4');
  var divk4      = document.getElementById('ke4').getElementsByTagName('p');
  var divb       = document.getElementById('ke5');
  var p2         = divb.getElementsByTagName('p');
 // var ke5c       = divb.getElementsByTagName('p');
    divv4.replaceChild(elemenbaru,divk4[0])

// DOM EVENTS 
/* adalah proses menjalankan javascript ketika USER melakukan sesuaitu sepert  , klik, keyup , hover dll
   EVENTS juga bisa berjalan otomatis 
      contoh :
               -> ketika halaman selesai di load maka jalankan ....
               -> ketika animasi telah dijalankan maka jalankan ....
                  DLL
*/
/*
   ada 3 cara 
      1. function inlineHTML 
         <elemem onclick='fungsi()'> klik disini </elemen>
*/
 
function jalankan (){
   // tentukan elemen yg diberi efek ketika di klik
   var ubahw = document.getElementById('p5');
      ubahw.style.cssText = 'color:green ; ';
}

/*    2.  onclick events berada di javascript ,
          <elemen id='id' >
*/
// tentukan target elemn
var p2 = document.getElementById('p22');
    // ketiak elemen p2 diklik jalankan funngsi(){warna()}
    p2.onclick = function(){warna(p2)};
   
function warna (elemen){
   elemen.style.color='green';
   elemen.style.fontSize='10px';
}
function font (elemen){
   elemen.style.fontSize='20px';
   elemen.style.color='red';
   elemen.style.border='dotted';;
}

// menggunakan elemen.addEventListener('even', fungsi(){  })

// ketiak elemen <p id='23' di klik jalankan fungsi warna()
var p23 = document.getElementById('p23');
p23.addEventListener('mouseover',function(){ warna(p23)});
p23.addEventListener('mouseup',function(){ font(p22)});
   // font(elemen) bebas diisi elemen manapun contoh
      // font(elmen1) font(elmen2) dst


/* bisa juga ditulis seperti dibawah ini namun styel.cssText tidak mendukung multipel
   function, artinya hanya fungsi terakhir yang dijalankan , kelebihannya cssText dapat
   menampung lebih dari 1 Kode Css 
      contoh : cssText='color:green; font-size:20px; border:dotted; '
      p23.addEventListener('click',function() {
         p23.style.cssText='color:20px';
      });

      p23.addEventListener('click',function() {
         p23.style.cssText='color:green';
      });
*/





