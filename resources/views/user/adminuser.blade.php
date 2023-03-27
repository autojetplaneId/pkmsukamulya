@extends('layouts.admin')

@push('styles')
{{-- <link rel="stylesheet" href="{{ asset('adminkit/css/dataTables.tableTools.css') }}"> --}}
@endpush

@section('content')
<div class="container-fluid p-0">

    <h1 class="h3 mb-3">Halaman Pengaturan User</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">DataTables Buttons</h5>
                    <h6 class="card-subtitle text-muted">This extension provides a framework with common options that can be used with
                        DataTables. See official documentation <a href="https://datatables.net/extensions/buttons/" target="_blank"
                            rel="noopener noreferrer nofollow">here</a>.</h6>
                </div>
                <div class="card-body">
                    <table id="datatables-users" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>No. HP</th>
                                <th>Status Aktif</th>
                                <th>Action</th>
                                {{-- <th>Centang Semua</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            {{-- <tr>
                                <td>1</td>
                                <td>Wiandi Fazzar</td>
                                <td>autojetplane</td>
                                <td>andi87.autojetplane@gmail.com</td>
                                <td>081220683819</td>
                                <td>2021/01/25</td>
                                <td>$112,000</td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
    <script src="{{ asset('adminkit/js/datatables.js')}}"></script>
    {{-- <script src="{{ asset('adminkit/js/dataTables.tableTools.js') }}"></script> --}}
    <script>
	         $("#datatables-users").DataTable({
				responsive: true,
                serverSide: true,
                ajax: "{{ route('adminuser.index') }}",
                language: {
                    "lengthMenu": "Menampilkan _MENU_ data",
                    "zeroRecords": "Maaf - Data yang dicari tidak ada.",
                    "info": "Halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data",
                    "search":         "Pencarian:",
                    "decimal":        "",
                    "emptyTable":     "Tidak ada data yang tersedia di tabel",
                    "infoFiltered":   "(disaring dari _MAX_ total data)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "loadingRecords": "Sedang mengambil data...",
                    "processing":     "Sedang Memproses",
                    "paginate": {
                        "first":      "Pertama",
                        "last":       "Terakhir",
                        "next":       "Berikutnya",
                        "previous":   "Sebelumnya"
                    },
                },
                select: {
                        style:'multi',
                        },
                stateSave: true,
                columns: [
                            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                            {data: 'name', name: 'name'},
                            {data: 'username', name: 'username'},
                            {data: 'email', name: 'email'},
                            {data: 'no_hp', name: 'no_hp'},
                            {data: 'is_active', name: 'is_active'},
                            {
                                data: 'action',
                                name: 'action',
                                orderable: true,
                                searchable: true
                            },
                            // {data: 'checkbox', name: 'checkbox', orderable:false, searchable:false},
                        ],
				lengthMenu:[
                    [5,10,25,50,100,-1],
                    [5,10,25,50,100,"Semua"],
                ]
			});
	</script>
@endpush

