<x-app>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/user') }}" class="btn btn-primary">Kembali </a>
                    <h4 class="card-title">Tambah Data Admin</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <form action="{{ url('admin/user', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label text-left">Username</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" value="{{$user->username}}" name="username">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label text-left">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="password" value="{{$user->password}}" name="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input"
                                        class="col-sm-2 col-form-label text-left">foto</label>
                                        <div class="col-sm-4">
                                            <img src="{{ url("public/$user->foto") }}" style="width:50%">
                                        </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="file"  name="foto" accept="png, jpg, jpeg">
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
