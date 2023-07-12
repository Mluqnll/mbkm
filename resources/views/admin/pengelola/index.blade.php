<x-app>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/user/create') }}" class="btn btn-primary float-right mb-10"> <span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h4 class="card-title">Data Nilai</h4>
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
                                <th>Foto</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($list_user as $user)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-layout.button.edit url="admin/user" id="{{ $user->id }}" />
                                            <x-layout.button.delete url="admin/user" id="{{$user->id}}" />
                                        </div>
                                    </td>
                                    <td>{{ $user->username }}</td>
                                    <td class="text-center">
                                        <img style="width: 20%" src="{{ url("public/$user->foto") }}" alt="">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
</x-app>
