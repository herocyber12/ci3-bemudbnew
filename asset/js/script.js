var cari = document.getElementById('cari');
var tombolcari = document.getElementById('tombol-cari');
var hasil = document.getElementById('hasil');

cari.addEventListener('keyup',function(){
    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.readyState==200){
            hasil.innerHTML = xhr.responseText;
        }
    }

    xhr.open('POST', 'search');
    xhr.send();
    //alert('berhasil');
});