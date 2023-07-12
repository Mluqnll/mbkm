<x-app>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/mahasiswa/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">Data Mahasiswa</h4>
                </div>
                <!--end card-header-->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Action</th>
                                <th>Nama</th>
                                <th>Program Studi</th>
                                <th>No Handphone</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list_mahasiswa as $mahasiswa)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-layout.button.edit url="admin/mahasiswa" id="{{ $mahasiswa->id }}" />
                                            <x-layout.button.delete url="admin/mahasiswa" id="{{ $mahasiswa->id }}" />
                                        </div>
                                    </td>
                                    <td>{{ $mahasiswa->nama }}</td>
                                    <td>{{ $mahasiswa->program_studi }}</td>
                                    <td>{{ $mahasiswa->nomor_hp }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
</x-app>
