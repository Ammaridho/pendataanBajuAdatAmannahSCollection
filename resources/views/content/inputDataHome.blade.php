<div class="container-fluid">
    <div class="row mt-3">

        <div class="col-sm-1">
            <div class="align-items-start">
                <div class="nav flex-column nav-pills me-3 p-2" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active" id="TabBeranda" data-bs-toggle="pill"  type="button" role="tab" aria-selected="true">Beranda</button>
                    <button class="nav-link" id="TabAtasan" data-bs-toggle="pill"  type="button" role="tab" aria-selected="true">Atasan</button>
                    <button class="nav-link" id="TabBawahan" data-bs-toggle="pill"  type="button" role="tab" aria-selected="false">Bawahan</button>
                    <button class="nav-link" id="TabAksesoris" data-bs-toggle="pill"  type="button" role="tab" aria-selected="false">Aksesoris</button>
                </div>
            </div>
        </div>

        <div class="col-sm-11">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="isiTab" role="tabpanel" aria-labelledby="v-pills-home-tab"></div>
            </div>
        </div>

    </div>
</div>

<script>
    // saat di refresh maka akan otomatis klik button tab Beranda
    $( document ).ready(function() {
        $('#TabBeranda').click();
    });

        // buka tab Beranda
    $('#TabBeranda').on('click',function () {
        $.get("{{ route('tabBeranda') }}",{},function (data) {
            $('#isiTab').html(data);
        })
    })

    // buka tab atasan
    $('#TabAtasan').on('click',function () {
        $.get("{{ route('tabAtasan') }}",{},function (data) {
            $('#isiTab').html(data);
        })
    })

    // buka tab bawahan
    $('#TabBawahan').on('click',function () {
        $.get("{{ route('tabBawahan') }}",{},function (data) {
            $('#isiTab').html(data);
        })
    })

    // buka tab aksesoris
    $('#TabAksesoris').on('click',function () {
        $.get("{{ route('tabAksesoris') }}",{},function (data) {
            $('#isiTab').html(data);
        })
    })
</script>
