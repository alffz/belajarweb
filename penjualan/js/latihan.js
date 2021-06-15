const input1 = document.getElementsByClassName('input1');
const tambah = document.getElementsByClassName('tambah');
const kurang = document.getElementsByClassName('kurang');

function tambahel(){
    const parent = document.getElementById('inputt');
    const input  = document.createElement('input');
    const valuee = document.createTextNode('');
    const posisi = document.getElementsByTagName('button');
        input.appendChild(valuee);
    parent.appendChild(input);
}

function kurangel(){
    const parent = document.getElementById('inputt');
    const remove = parent.getElementsByTagName('input');    
        remove[0].remove();
}

const parent    = document.getElementById('inputt');
const elemenP   = parent.getElementsByTagName('input');
const modal     = document.querySelector('.modal');  
    parent.onclick = function (){
        modal.style.cssText = 'display:block'
    }

const p = document.getElementsByTagName('p');
    for( let i = 0; i<p.length; i++){
    p[i].addEventListener('click', function(){
        p[i].style.cssText = 'color:red';
        p[i+1].style.cssText = 'color:blue';
    })
}

var tanggal = new Date();
var tanngall= tanggal.getFullYear();
const copyr = document.getElementById('cright');
    copyr.innerHTML += tanngall;







