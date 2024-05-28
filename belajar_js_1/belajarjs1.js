function Totalnya() {
    var ceklis = document.getElementsByClassName('makanan');
    var jumlahbeli = document.getElementsByClassName('jumlah');
    var totalHarga = 0;

  for (var i = 0; i < ceklis.length; i++) {
        if (ceklis[i].checked) {
            var harga = parseFloat(ceklis[i].value.split(' - ')[1]);
            var jumlah = parseInt(jumlahbeli[i].value);
            totalHarga += harga * jumlah;
        }
    }

    var totalDiv = document.getElementById('total');
    totalDiv.innerHTML = "Rp " + totalHarga;
}

function clearSelection() {
    var ceklis = document.getElementsByClassName('makanan');
    var jumlahbeli = document.getElementsByClassName('jumlah');

    for (var i = 0; i < ceklis.length; i++) {
        ceklis[i].checked = false;
        jumlahbeli[i].value = 0;
    }

    var totalDiv = document.getElementById('total');
    totalDiv.innerHTML = "";
}