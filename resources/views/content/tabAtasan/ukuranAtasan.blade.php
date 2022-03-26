
@for ($i = 0; $i < $jb; $i++)
    <div class="input-group">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 text-center">
                    <label class="form-label" for="k{{$i}}">{{$i+1}}. Kode</label>
                </div>
                <div class="col-2 text-center">
                    <label class="form-label" for="ua{{$i}}">Ukuran</label>
                </div>
                <div class="col-2 text-center">
                    <label class="form-label" for="lb{{$i}}">LB</label>
                </div>
                <div class="col-3 text-center">
                    <label class="form-label" for="pl{{$i}}">PL</label>
                </div>
                <div class="col-2 text-center">
                    <label class="form-label" for="ld{{$i}}">LD</label>
                </div>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" id="k{{$i}}"placeholder="{{$kode[$i]}}" disabled>
        <input type="hidden" name="kode_atasan[{{$i}}]" value="{{$kode[$i]}}">
        <select class="form-select" id="ua{{$i}}" name="ukuran_atasan[{{$i}}]">
        <option value="" selected>Pilih...</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        </select>
        <input type="number" class="form-control" id="lb{{$i}}" name="lingkar_badan[{{$i}}]" placeholder="Ukuran..">
        <input type="number" class="form-control" id="pl{{$i}}" name="panjang_lengan[{{$i}}]" placeholder="Ukuran..">
        <input type="number" class="form-control" id="ld{{$i}}" name="lebar_dada[{{$i}}]" placeholder="Ukuran..">
    </div>
@endfor
    
    