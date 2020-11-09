// ROUTE 
var rToGetProvinsi = server + "daerah/provinsi";
var rToGetKabupaten = server + "daerah/provinsi/";
var rToGetKecamatan = server + "daerah/kabupaten/";

// VUE OBJECT 
var divDataSiswa = new Vue({
    el : '#divDataSiswa',
    data : {

    },
    methods : {
        tambahSiswaAtc : function ()
        {
           $("#divDataSiswa").hide();
           $('#divTambahDataSiswa').show();
           document.querySelector('#txtNamaSiswa').focus();
        }
    }
});

var divTambahDataSiswa = new Vue({
    el : '#divTambahDataSiswa',
    data : {
        provinsi : [],
        kabupaten : [],
        kecamatan : []
    },
    methods : {
        simpanAtc : function ()
        {
            
        }
    }
});

// INISIALISASI 
$('#divTambahDataSiswa').hide();
$('#frgKabupatenLahir').hide();

$.get(rToGetProvinsi, function (data){
    let provinsi = data.provinsi;

    provinsi.forEach(renderProvinsi);
    function renderProvinsi(item, index){
        divTambahDataSiswa.provinsi.push({ nama:provinsi[index].nama, id_prov:provinsi[index].id_prov });
    }

});

// FUNCTION 
function provinsiPilih()
{
    let idProvinsi = document.querySelector('#txtProvinsiLahir').value;
    getKabupaten(idProvinsi);
    $('#frgKabupatenLahir').show();
}

function kabupatenPilih()
{
    let idKabupaten = document.querySelector('#txtKabupatenLahir').value;

    getKecamatan(idKabupaten);
}

function getKabupaten(idProvinsi)
{
    clearProvinsi();

    $.get(rToGetKabupaten+idProvinsi, function(data){
        let kabupaten = data.kabupaten;
        kabupaten.forEach(renderKabupaten);
        function renderKabupaten(item, index){
            divTambahDataSiswa.kabupaten.push({ nama:kabupaten[index].nama, id_kab:kabupaten[index].id_kab });
        }
    });
}

function getKecamatan(idKabupaten)
{
    $.get(rToGetKecamatan+idKabupaten, function(data){
        console.log(data);
    });
}

function clearProvinsi()
{
    let jlhItem = divTambahDataSiswa.kabupaten.length;
    var i;
    for(i = 0; i < jlhItem; i++){
        divTambahDataSiswa.kabupaten.splice(0,1);
    }
}