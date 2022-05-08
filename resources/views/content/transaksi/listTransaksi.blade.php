<h1 class="text-center">List Transaksi</h1>

<div class="row">
    <div class="col">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id Oreder</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Atas Nama</th>
                <th scope="col">Total Tagihan</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($dataTransaksi as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['created_at']}}</td>  <!-- INI BELUM MUNCUL KARENA JOIN-->
                        <td>{{$item['customer_id']}}</td>
                        <td>{{$item['total_tagihan']}}</td>
                        <td>{{$item['status']}}</td>
                    </tr>

                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
    </div>
</div>