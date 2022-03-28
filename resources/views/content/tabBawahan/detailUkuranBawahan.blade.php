<div class="row">
    <img src="/gambar_bawahan/{{$gambar_bawahan}}" alt="" width="10">
</div>
<div class="row">
    <table class="table table-hover">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Ukuran</th>
            <th>LP</th>
            <th>PK</th>
        </tr>
        <?php $i = 1;?>
        @foreach ($detailUkuranBawahan as $item)
        <tr>
            <td>{{$i}}</td>
            <td>{{$item['kode_bawahan']}}</td>
            <td>{{$item['ukuran_bawahan']}}</td>
            <td>{{$item['lingkar_pinggang']}} cm</td>
            <td>{{$item['panjang_kaki']}} cm</td>
        </tr>
        
        <?php $i++;?>
        @endforeach
    </table>
</div>