<?php $i = 1;?>
@foreach ($dataLengkapAksesoris as $item)
    <tr class="buttonDetailAksesoriss" data-id="{{($item['aksesoris_id'] == null) ? $item['id'] : $item['aksesoris_id']}}">
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

<script>
    // detail Ukuran
    $('tr.buttonDetailAksesoriss').on('click',function () {
        let id = $(this).data('id');
        $.get("{{ route('detailAksesoris') }}",{id:id},function (data) {
            $('#detailUkuran').html(data);
        })
    })
</script>