<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Input Aksesoris</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <form action="" method="post" id="formAksesoris">
                @csrf
                <div class="mb-3">
                    <label for="nama_aksesoris" class="form-label">Nama Aksesoris</label>
                    <input type="text" class="form-control" id="nama_aksesoris" name="nama_aksesoris">
                </div>

                <div class="input-group">
                    <label for="keterangan_aksesoris" class="form-label">Keterangan Aksesoris</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_aksesoris" name="keterangan_aksesoris" style="height: 100px"></textarea>
                </div>

                <label class="form-label" for="gambar_aksesoris">Gambar Aksesoris</label>
                
                <div class="input-group mb-4">
                    <input type="file" class="form-control" id="gambar_aksesoris" accept="image/png, image/jpeg">
                </div>
                
                
                <div class="row">
                    <div class="col-6">
                        <label class="form-label" for="gambar_aksesoris">Jumlah Aksesoris</label>
                    </div>
                    <div class="col-6">
                        <label class="form-label" for="gambar_aksesoris">Kode Aksesoris</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" placeholder="Jumlah Aksesoris" name="persediaan_aksesoris">
                        </div>
                    </div>
                
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="{{$kode}}" disabled>
                            <input type="hidden" name="kode_aksesoris" value="{{$kode}}">
                        </div>
                    </div>
                </div>
    
                <div class="buttonSubmit text-center">
                    <button id="submitAksesoris" type="button" class="btn btn-primary">Simpan</button>
                </div>
    
            </form>
        </div>
        <div class="col-lg-5">
            <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Aksesoris</th>
                    <th>Kode Aksesoris</th>
                    <th colspan="2">Keterangan</th>
                    <th>Persediaan</th>
                </tr>
                <?php $i = 1;?>
                @foreach ($data_aksesoris as $item)

                <tr class="buttonDetailUkuran" data-id="{{$item['id']}}">
                    <td>{{$i}}</td>
                    <td>{{$item['nama_aksesoris']}}</td>
                    <td>{{$item['kode_aksesoris']}}</td>
                    <td colspan="2">{{$item['keterangan_aksesoris']}}</td>
                    <td>{{$item['persediaan_aksesoris']}}</td>
                </tr>
                
                <?php $i++;?>
                @endforeach
                
            </table>
        </div>
        
    </div>
</div>

<script>

    // submit aksesoris
    $('#submitAksesoris').on('click',function () {

        console.log($('#formAksesoris').serialize());

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                type:'POST',
                url: "{{ route('storeAksesoris') }}",
                data: $('#formAksesoris').serialize(),
                success: function (data) {
                    alert('berhasil');

                    $('#TabAksesoris').click();
                },
                error: function (data) {
                    alert('gagal');
                }
            })
        }

    })
</script>