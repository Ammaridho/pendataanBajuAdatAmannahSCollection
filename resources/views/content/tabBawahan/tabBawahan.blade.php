<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Input Bawahan</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <form action="" method="post" id="formBawahan">
                @csrf
                <div class="mb-3">
                    <label for="nama_bawahan" class="form-label">Nama Bawahan</label>
                    <input type="text" class="form-control" id="nama_bawahan" name="nama_bawahan">
                </div>

                <div class="input-group">
                    <label for="keterangan_bawahan" class="form-label">Keterangan Bawahan</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_bawahan" name="keterangan_bawahan" style="height: 100px"></textarea>
                </div>

                <label class="form-label" for="gambar_bawahan">Gambar Bawahan</label>
                
                <div class="input-group mb-4">
                    <input type="file" class="form-control" id="gambar_bawahan" accept="image/png, image/jpeg">
                </div>
                
                <label class="form-label" for="gambar_bawahan">Jumlah Bawahan</label>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Jumlah Bawahan" id="jumlahBaju" name="jumlahBaju">
                            <button class="btn btn-outline-secondary" type="button" id="buttonJumlahBaju">Button</button>
                        </div>
                    </div>
                </div>

                <div id="formUkuranBawahan"></div>
    
                <div class="buttonSubmit text-center">
                    <button id="submitBawahan" type="button" class="btn btn-primary">Simpan</button>
                </div>
    
            </form>
        </div>
        <div class="col-lg-5">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Bawahan</th>
                    <th colspan="2">Keterangan</th>
                    <th>Persediaan</th>
                </tr>
                <?php $i = 1;?>
                @foreach ($data_bawahan as $item)

                <tr class="buttonDetailUkuranBawahan" data-id="{{$item['id']}}">
                    <td>{{$i}}</td>
                    <td>{{$item['nama_bawahan']}}</td>
                    <td colspan="2">{{$item['keterangan_bawahan']}}</td>
                    <td>{{$item['persediaan_bawahan']}}</td>
                </tr>
                
                <?php $i++;?>
                @endforeach
                
            </table>
        </div>
        <div class="col-lg-4">
            <div id="detailUkuranBawahan"></div>
        </div>
        
    </div>
</div>

<script>
    // detail Ukuran
    $('.buttonDetailUkuranBawahan').on('click',function () {

        let id = $(this).data('id');
        $.get("{{ route('detailUkuranBawahan') }}",{id:id},function (data) {
            $('#detailUkuranBawahan').html(data);
        })
    })

    // form Ukuran Bawahan
    $('#buttonJumlahBaju').on('click',function () {
        let jb = $('#jumlahBaju').val();
        $.get("{{ route('formUkuranBawahan') }}",{jb:jb},function (data) {
            $('#formUkuranBawahan').html(data);
        })
    })

    // submit Bawahan
    $('#submitBawahan').on('click',function () {

        console.log($('#formBawahan').serialize());

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                type:'POST',
                url: "{{ route('storeBawahan') }}",
                data: $('#formBawahan').serialize(),
                success: function (data) {
                    alert('berhasil');

                    $('#TabBawahan').click();
                },
                error: function (data) {
                    alert('gagal');
                }
            })
        }

    })
</script>