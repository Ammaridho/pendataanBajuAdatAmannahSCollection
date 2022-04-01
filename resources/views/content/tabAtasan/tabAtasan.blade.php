<div class="container-fluid">
    <div class="row mt-1">
        <div class="col">
            <h1 class="text-center">Atasan</h1>
        </div>
    </div>
    <hr style="margin-top:-5px">
    <div class="row">
        <div class="col-lg-3 mb-5">

            <div class="alert" id="message" style="display: none"></div>

            <form action="" method="post" id="formAtasan" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_atasan" class="form-label">Nama Atasan</label>
                    <input type="text" class="form-control" id="nama_atasan" name="nama_atasan">
                </div>

                <div class="input-group">
                    <label for="keterangan_atasan" class="form-label">Provinsi</label>
                </div>
                <div class="row mb-3">
                    @foreach ($provinsi as $item)
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="idProvinsi_atasan[]" id="{{$item['nama_provinsi']}}" value="{{$item['id']}}">
                            <label class="form-check-label" for="{{$item['nama_provinsi']}}">
                                {{$item['nama_provinsi']}}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="input-group">
                    <label for="keterangan_atasan" class="form-label">Keterangan Atasan</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_atasan" name="keterangan_atasan" style="height: 100px"></textarea>
                </div>

                <label class="form-label" for="gambar_atasan">Gambar Atasan</label>
                
                <div class="input-group mb-4">
                    <input type="file" class="form-control" name="gambar_atasan" id="gambar_atasan" accept="image/png, image/jpeg">
                </div>
                
                <label class="form-label" for="gambar_atasan">Jumlah Atasan</label>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Jumlah Atasan" id="persediaan_atasan" name="persediaan_atasan">
                            <button class="btn btn-outline-secondary" type="button" id="buttonPersediaanBawahan">Button</button>
                        </div>
                    </div>
                </div>

                <div id="formUkuranAtasan"></div>
    
                <div class="buttonSubmit text-center">
                    <button id="submitAtasan" type="submit" class="btn btn-primary">Simpan</button>
                </div>
    
            </form>
        </div>
        <div class="col-lg-5 mb-5">
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
        <div class="col-lg-4 mb-5">
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
    $('#buttonPersediaanBawahan').on('click',function () {
        let jb = $('#persediaan_atasan').val();
        $.get("{{ route('formUkuranAtasan') }}",{jb:jb},function (data) {
            $('#formUkuranAtasan').html(data);
        })
    })

    // submit atasan
    $('#formAtasan').on('submit',function () {
        event.preventDefault();

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                method:'POST',
                url: "{{ route('storeAtasan') }}",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    alert(data.message);

                    if (data.result == 'success') {
                        $('#TabAtasan').click();
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