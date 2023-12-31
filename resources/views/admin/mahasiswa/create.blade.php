<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('admin/mahasiswa')}}" class="btn btn-primary">Kembali </a>
                    <h4 class="card-title">Tambah Data Mahasiswa</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form action="{{ url('admin/mahasiswa') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="example-text-input"
                                        class="col-sm-2 col-form-label text-left">NIM</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nim">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"
                                        class="col-sm-2 col-form-label text-left">Nama</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" class="col-sm-2 col-form-label text-left">Program
                                        Studi</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="program_studi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" class="col-sm-2 col-form-label text-left">Nomor
                                        Handphone</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="nomor_hp">
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
