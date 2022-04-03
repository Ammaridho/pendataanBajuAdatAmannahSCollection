<div class="row">
    <div class="col">
        <button class="btn btn-primary" id="editAksesoris" data-bs-toggle="modal" data-bs-target="#editAksesorisModal" data-data="{{$dataAksesoris}}" data-relasi="{{$relasiProvinsiAksesoris}}">Edit</button>
        <button>hapus</button>
    </div>
</div>
<div class="row">
    <img src="/gambar_aksesoris/{{$dataAksesoris->gambar_aksesoris}}" alt="" width="10">
</div>

<script>
    $('#editAksesoris').on('click',function () {
        let dataAksesoris = $(this).data('data');
        let dataRelasiAksesoris = $(this).data('relasi');

        $('#idAksesorisEdit').val(dataAksesoris['id']);
        $('#nama_aksesorisEdit').val(dataAksesoris['nama_aksesoris']);

        $("input[name=golongan_aksesorisEdit]").attr('checked',false);
        $("input[name=golongan_aksesorisEdit][value="+dataAksesoris['golongan_aksesoris']+"]").attr('checked',true);

        dataRelasiAksesoris.forEach(element => {
            $("input[value="+element['provinsi_id']+"].checkboxProvinsiEdit").attr('checked',true);
        });

        $("#keterangan_aksesorisEdit").val(dataAksesoris['keterangan_aksesoris']);

        $("#gambarReview").attr("src", "/gambar_aksesoris/"+dataAksesoris['gambar_aksesoris']);

        document.getElementById("kodeEdit").placeholder = dataAksesoris['kode_aksesoris'];
        $("input[name=kode_aksesorisEdit]").val(dataAksesoris['kode_aksesoris']);

        $("input[name=persediaan_aksesorisEdit]").val(dataAksesoris['persediaan_aksesoris']);
        $("input[name=harga_aksesorisEdit]").val(dataAksesoris['harga_aksesoris']);
    })
</script>