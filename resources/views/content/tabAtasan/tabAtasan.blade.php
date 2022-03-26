<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Input Atasan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <form action="" method="post" id="formAtasan">
                @csrf
                <div class="mb-3">
                    <label for="nama_atasan" class="form-label">Nama Atasan</label>
                    <input type="text" class="form-control" id="nama_atasan" name="nama_atasan">
                </div>

                <div class="input-group">
                    <label for="keterangan_atasan" class="form-label">Keterangan Atasan</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_atasan" name="keterangan_atasan" style="height: 100px"></textarea>
                </div>

                <label class="form-label" for="gambar_atasan">Gambar Atasan</label>
                
                <div class="input-group mb-4">
                    <input type="file" class="form-control" id="gambar_atasan" accept="image/png, image/jpeg">
                </div>
                
                <label class="form-label" for="gambar_atasan">Jumlah Atasan</label>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Jumlah Atasan" id="jumlahBaju" name="jumlahBaju">
                            <button class="btn btn-outline-secondary" type="button" id="buttonJumlahBaju">Button</button>
                        </div>
                    </div>
                </div>

                <div id="formUkuranAtasan"></div>
    
                <div class="buttonSubmit text-center">
                    <button id="submitAtasan" type="button" class="btn btn-primary">Simpan</button>
                </div>
    
            </form>
        </div>
        <div class="col-lg-5">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Atasan</th>
                    <th colspan="2">Keterangan</th>
                    <th>Persediaan</th>
                </tr>
                <?php $i = 1;?>
                @foreach ($data_atasan as $item)

                <tr class="buttonDetailUkuran" data-id="{{$item['id']}}">
                    <td>{{$i}}</td>
                    <td>{{$item['nama_atasan']}}</td>
                    <td colspan="2">{{$item['keterangan_atasan']}}</td>
                    <td>{{$item['persediaan_atasan']}}</td>
                </tr>
                
                <?php $i++;?>
                @endforeach
                
            </table>
        </div>
        <div class="col-lg-4">
            <div id="detailUkuran"></div>
        </div>
        
    </div>
</div>

<script>
    // detail Ukuran
    $('.buttonDetailUkuran').on('click',function () {

        let id = $(this).data('id');
        $.get("{{ route('detailUkuranAtasan') }}",{id:id},function (data) {
            $('#detailUkuran').html(data);
        })
    })

    // form Ukuran Atasan
    $('#buttonJumlahBaju').on('click',function () {
        let jb = $('#jumlahBaju').val();
        $.get("{{ route('formUkuranAtasan') }}",{jb:jb},function (data) {
            $('#formUkuranAtasan').html(data);
        })
    })

    // submit atasan
    $('#submitAtasan').on('click',function () {

        console.log($('#formAtasan').serialize());

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                type:'POST',
                url: "{{ route('storeAtasan') }}",
                data: $('#formAtasan').serialize(),
                success: function (data) {
                    alert('berhasil');

                    $('#TabAtasan').click();
                },
                error: function (data) {
                    alert('gagal');
                }
            })
        }

    })
</script>