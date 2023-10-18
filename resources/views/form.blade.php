@extends('layout')

@section('content')
<div class="container">
    <div class="row py-3">
        <div class="col-12 col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Data Member</h1>
                </div>
                <div class="card-body">
                    <form action="{{ url('/store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="handphone" class="fw-bold form-label">HANDPHONE</label>
                            <input type="number" class="form-control" name="handphone" pattern="\d+" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="fw-bold form-label">NAMA</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>

                        <div class="mb-3">
                            <label for="alamat" class="fw-bold form-label">ALAMAT</label>
                            <input type="text" class="form-control" name="alamat" required>
                        </div>

                        <div class="mb-3">
                            <label for="agama" class="fw-bold form-label">AGAMA</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="agama" value="Islam" required>
                                <label class="form-check-label">Islam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="agama" value="Kristen" required>
                                <label class="form-check-label">Kristen</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="agama" value="Hindu" required>
                                <label class="form-check-label">Hindu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="agama" value="Buddha" required>
                                <label class="form-check-label">Buddha</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="hobby" class="fw-bold form-label">HOBBY</label><br>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Musik">
                                <label class="form-check-label">Musik</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Olahraga">
                                <label class="form-check-label">Olahraga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Kesenian">
                                <label class="form-check-label">Kesenian</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Games">
                                <label class="form-check-label">Games</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Otomotif">
                                <label class="form-check-label">Otomotif</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Makan">
                                <label class="form-check-label">Makan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="Tidur">
                                <label class="form-check-label">Tidur</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="tahun_lahir" class="fw-bold form-label">TAHUN LAHIR</label>
                            <select class="form-select" name="thn_lahir" id="tahun_lahir">
                                <option value="" selected disabled>-- Pilih Tahun Lahir --</option>
                                @for ($i = date('Y'); $i >= 1960; $i--)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="umur" class="fw-bold form-label">UMUR</label>
                            <input type="text" class="form-control" name="umur" id="umur" readonly>
                        </div>

                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <button type="submit" class="btn btn-primary">SIMPAN DATA</button>
                            <a href="/list" class="btn btn-outline-dark">CETAK DATA</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection


@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Ambil elemen-elemen yang diperlukan
        var tahunLahirSelect = document.getElementById("tahun_lahir");
        var umurInput = document.getElementById("umur");

        // Saat nilai tahun lahir berubah, hitung umur
        tahunLahirSelect.addEventListener("change", function () {
            var tahunLahir = parseInt(tahunLahirSelect.value);
            var tahunSekarang = new Date().getFullYear();
            var umur = tahunSekarang - tahunLahir;

            // Perbarui nilai input umur
            umurInput.value = umur;
        });
    });
</script>
@endpush