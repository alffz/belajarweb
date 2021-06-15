<html lang="en">

<style>
    *{
        border  : 2px solid black;
        padding : 15px;
        margin  : 15px;
    }
    html{
        margin  :0;
        padding :0;
    }
    body{
        max-width : 600px;
        margin    : 30px auto;
    }

.mystyle {
  width: 500px;
  height: 50px;
  border: 1px solid black;
}

.anotherClass {
  background-color: lightblue;
  padding: 25px;
}

.thirdClass {
  text-align: center;
  font-size: 25px;
  color: navy;
  margin-bottom: 10px;
}
.ke5{
    background-color: lightblue;
    color: red;
}
.warna{
    color:yellow;
}
.fixbody{
    background-color: rgb(233,0,3)
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=deice-width, intial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- mengubah border dgn id container ketika udiv() diklik -->
<!--
<button onclick="udiv()">ubah div</button>
    <div id='container' class='cont1a'>
        <h1 id='judul'>tentang kamu belajar_javascript</h1>
        <p id='isi' class='d1p1'>ini adalah contoh paragraf dengan belajar_javascript</p>
        <p id='paragraf1' class='d1p1'>lumayan sulit untuk memplajarinya tapi aku takkan menyerah</p>
        <p id='copygiht'>Copyright &copy</p>
    </div>

        <p > paragraf ini diluar id='container' </p>
    <div id ='container' class='cont1'>
    <h1 id='judul'>bagian ke2 belajar_javascript</h1>
        <p id='isi'>bagian ini adalah bagian kedua dari js ku</p>
        <p id='paragraf1'>akann lebih mudah jika belajar pelan2</p>
        <p id='copygiht'>Copyright &copy</p>
    </div>

    <div id ='containerr' class='cont1'>
    <h1 id='judul'>bagian ke3 belajar_javascript</h1>
        <p id='isi'>pada bagian ini coba kita tampilkan </p>
        <p id='paragraf1'>container div ke 2 ditutup dengan display='none'</p>
        <p id='copygiht'>Copyright &copy</p>
    </div>
    
    <div id='div4'  class='plastt'>
        <p id="ptext0"name="ptext1">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p id="ptext1"name="ptext1">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p id="ptext2"name="ptext1">3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p id="ptext3"name="ptext1">4. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p id="ptext4"name="ptext1">5. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p id="ptext5"name="ptext1">6. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <p id="ptext6"name="ptext1">7. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    -->
<h1 id='judull'>Judul besar</h1>
<div id='container' class="container">
    <section id='pertama'>
        <button onclick="klik()"> ganti warna</button>
        <p class='p1'>paragraf pertama</p>
        <a  href="http://www.google.com">google</a>
        <p class="p2">paragraf kedua</p>
        <p class="p3">paragraf ketiga</p>
    </section>
    <section id='kedua'>
        <ul class="per">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
        <ul class="ked">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </section>
</div>
<br> 
<div id='containerr' class='conner'>
<section id='pertama'>
        <button onclick="klik()"> ganti warna</button>
        <p class='p1'>paragraf pertama</p>
        <p class='p1'>paragraf pertama1</p>
        <p class='p1'>paragraf pertama2</p>
        <a  href="http://www.google.com">google</a>
        <p class="p2">paragraf kedua</p>
        <p class="p3">paragraf ketiga</p>
    </section>
    <section id='keduaa'>
        <ul class="">
            <li>Item pertama</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </section>
    <button onclick='ubah_sekaligus()'>ubah</button>    
</div>
<div id='container3' class='pertama kedua' >
    <section id='ketiga'>
        <ul class="ul1">
            <li class='pertama kedua ketiga'>Item 1 div terakhir</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
        <ul class="ul2">
            <li class='pertama kedua ketiga'>Item 1 div terakhir</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </section>
    <section> kedua</section>
    <button onclick='myFunction12()'> ganti</button>
</div>
<div id="myDIV" class="mystyle anotherClass thirdClass">
I am a DIV element
</div>

<div id='ke4'>
    <p>cinta adalah kunci</p>
    <p>memberika hidup penuh warna</p>
    <p>karna cinta lengkapi hiduup hey</p>
    <button onclick='hapuschild1()'>hapus</button>
    <button onclick='tambahchild()'>tambah</button>
</div>
<div id='ke5'>
    <p id='p5' onclick="jalankan()">kau gadisku yang cantik</p>
    <p id='p22'>coba lihat aku disini</p>
    <p id='p23'>disini ada aku yang sayang padamu</p>
    <p>o hoo hooo walau kutau</p>
</div>
<ul id="myList"><li>Coffee</li><li>Tea</li><li>Milk</li></ul>

<p>Click the button to remove the first item from the list.</p>

<button onclick="hapuschild()">Try it</button>

<button onclick="myFunction()">Try it</button>
<button onclick="myFunction1()">cobalah</button>
<script src='belajar_javascript.js'></script> 
</body>
</html>

