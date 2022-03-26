
@for ($i = 0; $i < $jb; $i++)
    <div class="input-group">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3 text-center">
                    <label class="form-label" for="kk{{$i}}">{{$i+1}}. Kode</label>
                </div>
                <div class="col-3 text-center">
                    <label class="form-label" for="ub{{$i}}">Ukuran</label>
                </div>
                <div class="col-3 text-center">
                    <label class="form-label" for="lp{{$i}}">LP</label>
                </div>
                <div class="col-3 text-center">
                    <label class="form-label" for="pk{{$i}}">PK</label>
                </div>
            </div>
        </div>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" id="kk{{$i}}"placeholder="{{$kode[$i]}}" disabled>
        <input type="hidden" name="kode_bawahan[{{$i}}]" value="{{$kode[$i]}}">
        <select class="form-select" id="ub{{$i}}" name="ukuran_bawahan[{{$i}}]">
        <option value="" selected>Pilih...</option>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
        </select>
        <input type="number" class="form-control" id="lp{{$i}}" name="lingkar_pinggang[{{$i}}]" placeholder="Ukuran..">
        <input type="number" class="form-control" id="pk{{$i}}" name="panjang_kaki[{{$i}}]" placeholder="Ukuran..">
    </div>
@endfor
    
    