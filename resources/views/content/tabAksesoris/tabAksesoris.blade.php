<div class="container-fluid">
    <div class="row mt-1">
        <div class="col">
            <h1 class="text-center">Input Aksesoris</h1>
        </div>
    </div>
    <hr style="margin-top:-5px">
    <div class="row">
        <div class="col-lg-3 mb-5">
            <form action="" method="post" id="formAksesoris" enctype="multipart/form-data">
                
                @csrf

                <div class="mb-3">
                    <label for="nama_aksesoris" class="form-label">Nama Aksesoris</label>
                    <input type="text" class="form-control" id="nama_aksesoris" name="nama_aksesoris">
                </div>

                <label for="golongan_aksesoris" class="form-label">Golongan Aksesoris</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="golongan_aksesoris" value="biasa" id="golongan_aksesoris1" checked>
                    <label class="form-check-label" for="golongan_aksesoris1">
                      Biasa
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="golongan_aksesoris" value="premium" id="golongan_aksesoris2">
                    <label class="form-check-label" for="golongan_aksesoris2">
                      Premium
                    </label>
                  </div>
                
                <div class="input-group">
                    <label for="keterangan_atasan" class="form-label">Provinsi</label>
                </div>
                <div class="row mb-3">
                    @foreach ($provinsi as $item)
                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="idProvinsi_aksesoris[]" id="{{$item['nama_provinsi']}}" value="{{$item['id']}}">
                            <label class="form-check-label" for="{{$item['nama_provinsi']}}">
                                {{$item['nama_provinsi']}}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="input-group">
                    <label for="keterangan_aksesoris" class="form-label">Keterangan Aksesoris</label>
                </div>
                <div class="form-floating mb-4">
                    <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_aksesoris" name="keterangan_aksesoris" style="height: 100px"></textarea>
                </div>

                <label class="form-label" for="gambar_aksesoris">Gambar Aksesoris</label>
                
                <div class="input-group mb-4">
                    <input type="file" class="form-control" id="gambar_aksesoris" name="gambar_aksesoris" accept="image/png, image/jpeg">
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

                <div class="row mb-4">
                    <div class="col">
                        <label class="form-label" for="harga_aksesoris">Harga</label>
                        <input id="harga_aksesoris" type="number" class="form-control" placeholder="harga.." name="harga_aksesoris">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="buttonSubmit text-center">
                            <button id="submitAksesoris" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
    
            </form>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="row">
                <div class="col-3" id="sortingBerdasarProvinsi">
                    <select class="form-select">
                        <option value="semua" selected>Pilih Provinsi...</option>
                        @foreach ($provinsi as $item)
                            <option value="{{$item['id']}}">{{$item['nama_provinsi']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-4">
                    <input class="form-control" type="search" placeholder="Cari Aksesoris.." aria-label="Search" id="textSearchAksesoris" name="textSearchAksesoris">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="listAksesoris">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    {{-- <th>Gambar</th> --}}
                                    <th>Nama</th>
                                    <th>Golongan</th>
                                    <th>Kode</th>
                                    <th colspan="2">Keterangan</th>
                                    <th>Persediaan</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody id="listAksesoris">
                                <?php $i = 1;?>
                                @foreach ($data_aksesoris as $item)
                                    <tr class="buttonDetailAksesoris" data-id="{{$item['id']}}">
                                        <td>{{$i}}</td>
                                        <td>{{$item['nama_aksesoris']}}</td>
                                        <td>{{$item['golongan_aksesoris']}}</td>
                                        <td>{{$item['kode_aksesoris']}}</td>
                                        <td colspan="2">{{$item['keterangan_aksesoris']}}</td>
                                        <td>{{$item['persediaan_aksesoris']}}</td>
                                        <td>Rp.{{$item['harga_aksesoris']}}</td>
                                    </tr>
                                <?php $i++;?>   
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-5">
            <div id="detailUkuran"></div>
        </div>
    </div>
</div>

<!-- Modal Edit Aksesoris-->
<div class="modal fade" id="editAksesorisModal" tabindex="-1" aria-labelledby="editAksesorisModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editAksesorisModalLabel">Edit Aksesoris</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="post" id="formEditAksesoris" enctype="multipart/form-data">
                <div class="modal-body">
                
                    @csrf

                    <input type="hidden" id="idAksesorisEdit" value="" name="idAksesorisEdit">

                    <div class="mb-3">
                        <label for="nama_aksesorisEdit" class="form-label">Nama Aksesoris</label>
                        <input type="text" class="form-control" id="nama_aksesorisEdit" name="nama_aksesorisEdit">
                    </div>
    
                    <label for="golongan_aksesorisEdit" class="form-label">Golongan Aksesoris</label>
                    <div class="form-check">
                        <input class="form-check-input golongan_aksesorisEdit" type="radio" name="golongan_aksesorisEdit" value="biasa" id="golongan_aksesorisEdit1">
                        <label class="form-check-label" for="golongan_aksesorisEdit1">
                          Biasa
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input golongan_aksesorisEdit" type="radio" name="golongan_aksesorisEdit" value="premium" id="golongan_aksesorisEdit2">
                        <label class="form-check-label" for="golongan_aksesorisEdit2">
                          Premium
                        </label>
                      </div>
                    
                    <div class="input-group">
                        <label for="keterangan_atasan" class="form-label">Provinsi</label>
                    </div>
                    <div class="row mb-3">
                        @foreach ($provinsi as $item)
                        <div class="col-6">
                            <div class="form-check">
                                <input class="form-check-input checkboxProvinsiEdit" type="checkbox" name="idProvinsi_aksesorisEdit[]" id="{{$item['nama_provinsi']}}" value="{{$item['id']}}">
                                <label class="form-check-label" for="{{$item['nama_provinsi']}}">
                                    {{$item['nama_provinsi']}}
                                </label>
                            </div>
                        </div>
                        @endforeach
                    </div>
    
                    <div class="input-group">
                        <label for="keterangan_aksesorisEdit" class="form-label">Keterangan Aksesoris</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="keterangan_aksesorisEdit" name="keterangan_aksesorisEdit" style="height: 100px"></textarea>
                    </div>
    
                    <label class="form-label" for="gambar_aksesorisEdit">Gambar Aksesoris</label>
                    <div class="input-group mb-2">
                        <img id="gambarReview" src="" alt="" width="100">
                    </div>
                    <div class="input-group mb-4">
                        <input type="file" class="form-control" id="gambar_aksesorisEdit" name="gambar_aksesorisEdit" accept="image/png, image/jpeg">
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label" for="gambar_aksesorisEdit">Jumlah Aksesoris</label>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="gambar_aksesorisEdit">Kode Aksesoris</label>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" placeholder="Jumlah Aksesoris" name="persediaan_aksesorisEdit">
                            </div>
                        </div>
                    
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="kodeEdit" placeholder="" disabled>
                                <input type="hidden" name="kode_aksesorisEdit" value="">
                            </div>
                        </div>
                    </div>
    
                    <div class="row mb-4">
                        <div class="col">
                            <label class="form-label" for="harga_aksesorisEdit">Harga</label>
                            <input id="harga_aksesorisEdit" type="number" class="form-control" placeholder="harga.." name="harga_aksesorisEdit">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submittest" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    // option provinsi selected
    $("#sortingBerdasarProvinsi select").on('change',function () {
        let idProvinsi = $(this).val();

        $.get("{{ route('sortProvinsiAksesoris') }}",{idProvinsi:idProvinsi},function (data) {
            $('#listAksesoris').html(data);
        })
    });

     // search Aksesoris
     $("#textSearchAksesoris").on("keyup", function() {
      var value = $(this).val().toLowerCase();

      $("#listAksesoris tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });

    });

    // detail Ukuran
    $('tr.buttonDetailAksesoris').on('click',function () {
        let id = $(this).data('id');
        $.get("{{ route('detailAksesoris') }}",{id:id},function (data) {
            $('#detailUkuran').html(data);
        })
    })

    // submit aksesoris
    $('#formAksesoris').on('submit',function () {

        event.preventDefault();

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                type:'POST',
                url: "{{ route('storeAksesoris') }}",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    alert(data.message);

                    if (data.result == 'success') {
                        $('#TabAksesoris').click();
                    }
                },
                error: function (data) {
                    // alert(data.message);
                    alert('Gagal, Isi data dengan lengkap!');
                }
            })
        }

    })

    // submit Edit aksesoris
    $('#formEditAksesoris').on('submit',function () {
        alert('untuk edit');

        event.preventDefault();

        $konfirm = confirm('yakin Simpan?');

        if($konfirm){
            $.ajax({
                type:'POST',
                url: "{{ route('storeEditAksesoris') }}",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    alert(data.message);

                    if (data.result == 'success') {
                        $('#TabAksesoris').click();
                        $('#editAksesorisModal').modal('hide');
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