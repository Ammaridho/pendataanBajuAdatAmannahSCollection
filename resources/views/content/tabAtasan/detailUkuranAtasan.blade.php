<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Ukuran</th>
        <th>LB</th>
        <th>PL</th>
        <th>LD</th>
    </tr>
    <?php $i = 1;?>
    @foreach ($detailUkuranAtasan as $item)
    <tr>
        <td>{{$i}}</td>
        <td>{{$item['kode_atasan']}}</td>
        <td>{{$item['ukuran_atasan']}}</td>
        <td>{{$item['lingkar_badan']}} cm</td>
        <td>{{$item['panjang_lengan']}} cm</td>
        <td>{{$item['lebar_dada']}} cm</td>
    </tr>
    
    <?php $i++;?>
    @endforeach
</table>