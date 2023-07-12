<x-web>

    <section class="st-about-wrap mt-10" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Nilai</h4>
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Nilai</th>
                                        <th>Grade</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($list_nilai as $nilai)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td>{{ $nilai->mahasiswa->nim }}</td>
                                            <td>{{ $nilai->mahasiswa->nama }}</td>
                                            <td>{{ $nilai->nilai }}</td>
                                            <td>
                                                @if ($nilai->nilai >= 85)
                                                    <p>A</p>
                                                @endif

                                                @if ($nilai->nilai >= 75 && $nilai->nilai < 85)
                                                    <p>B</p>
                                                @endif
                                                @if ($nilai->nilai >= 65 && $nilai->nilai < 75)
                                                    <p>C</p>
                                                @endif
                                                @if ($nilai->nilai >= 50 && $nilai->nilai < 65)
                                                    <p>D</p>
                                                @endif
                                                @if ($nilai->nilai < 50)
                                                    <p>E</p>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </section>
    {{-- <section class="st-about-wrap mt-10" id="about">
        <div class="container">
            <div class="row">
                <!-- .col -->
                <div class="col-lg-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="st-shedule-wrap">
                        <div class="st-shedule">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <a href="{{ url('admin/nilai/create') }}" class="btn btn-primary float-right mb-10"> <span
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
                                                        <th>Nilai</th>
                                                        <th>Grade</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
                                                    @foreach ($list_nilai as $nilai)
                                                        <tr>
                                                            <td class="text-center">{{ $loop->iteration }}</td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <x-layout.button.delete url="admin/nilai" id="{{$nilai->id}}" />
                                                                </div>
                                                            </td>
                                                            <td>{{ $nilai->mahasiswa->nama }}</td>
                                                            <td>{{ $nilai->nilai }}</td>
                                                            <td>
                                                                @if ($nilai->nilai >= 85)
                                                                    <p>A</p>
                                                                @endif

                                                                @if ($nilai->nilai >= 75 && $nilai->nilai < 85)
                                                                    <p>B</p>
                                                                @endif
                                                                @if ($nilai->nilai >= 65 && $nilai->nilai < 75)
                                                                    <p>C</p>
                                                                @endif
                                                                @if ($nilai->nilai >= 50 && $nilai->nilai < 65)
                                                                    <p>D</p>
                                                                @endif
                                                                @if ($nilai->nilai < 50)
                                                                    <p>E</p>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div>
        </div>
    </section> --}}
</x-web>
