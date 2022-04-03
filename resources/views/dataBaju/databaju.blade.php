<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center">DATA</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button>Semua</button>
            <button>Provinsi</button>
            <button>Jenis Barang</button>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table  class="table">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Gambar</th>
                        <th>Nama_atasan</th>
                        <th>Provinsi</th>
                        <th>Keterangan</th>
                        <th>Persediaan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($dataAtasan as $item)
                        <tr>
                            <td>{{$i}}</td>
                            <td><img src="/gambar_atasan/{{$item->gambar_atasan}}" alt="" width="100"></td>
                            <td>{{$item->nama_atasan}}</td>
                            <td>{{$item->provinsi}}</td>
                            <td>{{$item->keterangan_atasan}}</td>
                            <td>{{$item->persediaan_atasan}}</td>
                        </tr>

                        <?php $i++;?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>