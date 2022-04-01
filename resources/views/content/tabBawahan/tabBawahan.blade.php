<div class="container-fluid">
    <div class="row mt-1">
        <div class="col">
            <h1 class="text-center">Input Bawahan</h1>
        </div>
    </div>
    <hr style="margin-top:-5px">
    <div class="row">
        <div class="col-lg-3 mb-5">
            <form action="" method="post" id="formBawahan" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_bawahan" class="form-label">Nama Bawahan</label>
                    <input type="text" class="form-control" id="nama_bawahan" name="nama_bawahan">
                </div>

                <div class="input-group">
                    <label for="keterangan_atasan" class="form-label">Provinsi</label>
                </div>
                <div class="row mb-3">
                    @foreach ($provinsi as $item)
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="idProvinsi_bawahan[]" id="{{$item['nama_provinsi']}}" value="{{$item['id']}}">
                            <label class="form-check-label" for="{{$item['nama_provinsi']}}">
                                {{$item['nama_provinsi']}}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="input-group">
                    <label for="keterangan_bawahan" class="form-label">Keterangan Bawahan</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_bawahan" name="keterangan_bawahan" style="height: 100px"></textarea>
                </div>

                <label class="form-label" for="gambar_bawahan">Gambar Bawahan</label>
                
                <div class="input-group mb-4">
                    <input type="file" class="form-control" id="gambar_bawahan" name="gambar_bawahan" accept="image/png, image/jpeg">
                </div>
                
                <label class="form-label" for="gambar_bawahan">Jumlah Bawahan</label>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Jumlah Bawahan" id="persediaan_bawahan" name="persediaan_bawahan">
                            <button class="btn btn-outline-secondary" type="button" id="buttonPersediaanBawahan">Button</button>
                        </div>
                    </div>
                </div>

                <div id="formUkuranBawahan"></div>
    
                <div class="buttonSubmit text-center">
                    <button id="submitBawahan" type="submit" class="btn btn-primary">Simpan</button>
                </div>
    
            </form>
        </div>
        <div class="col-lg-5 mb-5">
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
        <div class="col-lg-4 mb-5">
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
    $('#buttonPersediaanBawahan').on('click',function () {
        let jb = $('#persediaan_bawahan').val();
        $.get("{{ route('formUkuranBawahan') }}",{jb:jb},function (data) {
            $('#formUkuranBawahan').html(data);
        })
    })

    // submit Bawahan
    $('#formBawahan').on('submit',function () {
        event.preventDefault();

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                method:'POST',
                url: "{{ route('storeBawahan') }}",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    alert(data.message);

                    if (data.result == 'success') {
                        $('#TabBawahan').click();
                    }
                },
                error: function (data) {
                    // alert(data.message);
                    alert('Gagal, Isi data dengan lengkap!');
                }
            })
        }

    })
</script>