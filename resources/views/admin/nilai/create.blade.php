<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/nilai') }}" class="btn btn-primary">Kembali </a>
                    <h4 class="card-title">Tambah Data Nilai</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form action="{{ url('admin/nilai') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-left">Nama
                                        Mahasiswa</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" list="list_mahasiswa" name="nim_mahasiswa"
                                            onkeyup="cekNama(this.value)" required
                                            data-required-error="Masukkan Nomor Induk Penerima">
                                        <datalist id="list_mahasiswa">
                                            @foreach ($list_mahasiswa as $mahasiswa)
                                                <option value="{{ $mahasiswa->nim }}">{{ $mahasiswa->nama }}
                                                </option>
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-left">Mata
                                        Kuliah</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="mata_kuliah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input"
                                        class="col-sm-2 col-form-label text-left">Nilai</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nilai">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-12 text-right">
                                        <button type="submit" class="btn btn-primary px-4">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
</x-app>
