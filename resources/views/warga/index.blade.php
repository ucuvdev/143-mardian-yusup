@extends('layout.index');
@section('title', 'Data Warga');
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>
            {{-- <div class="section-body"> --}}
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-icon icon-left btn-primary mb-4" id="btn-tambah-warga">
                                <i class="fas fa-plus-circle"></i> Tambah Data Warga
                            </button>
                            <table class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%"
                                id="wargaTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">NAMA KK</th>
                                        <th class="text-center">JML JIWA</th>
                                        <th class="text-center">ALAMAT</th>
                                        <th class="text-center">AKSI</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </section>
    </div>
    <div class="view-modal" style="display: none;"></div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#wargaTable').DataTable({
                lengthChange: false,
                pageLength: 5,
                processing: true,
                serverSide: true,
                ajax: "{{ route('warga.index') }}",
                columnDefs: [{
                    targets: '_all',
                    className: 'dt-body-middle'
                }, {
                    targets: [0, 2, 4],
                    className: 'dt-body-center'
                }],
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    sWidth: '10%',
                }, {
                    data: 'nama_kk',
                    name: 'nama_kk',
                }, {
                    data: 'jml_jiwa',
                    name: 'jml_jiwa',
                    sWidth: '15%',
                }, {
                    data: 'alamat',
                    name: 'alamat',
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    sWidth: '10%',
                }]
            });

            $('.modal-form').on('shown.bs.modal', function() {
                $(this).find('[autofocus]').focus();
            });
        });

        $('body').on('click', '#btn-tambah-warga', function() {
            $.ajax({
                url: 'warga/create',
                type: 'get',
                success: function(response) {
                    if (response) {
                        $('.view-modal').html(response).show();
                        $('#tambahWargaModal').modal('show');
                    }
                }
            });
        });

        $('body').on('click', '#btn-edit-warga', function() {
            var id = $(this).data('id');
            $.ajax({
                url: 'warga/' + id + '/edit',
                type: 'get',
                success: function(response) {
                    if (response) {
                        $('.view-modal').html(response).show();
                        $('#editWargaModal').modal('show');
                    }
                }
            });
        });

        $('body').on('click', '#btn-hapus-warga', function() {
            var id = $(this).data('id');
            Swal.fire({
                title: 'Hapus',
                html: 'Yakin untuk menghapus data warga ini?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#3085d6',
                confirmButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'warga/' + id,
                        type: 'delete',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: response.success,
                                    icon: 'success',
                                });
                                $('#wargaTable').DataTable().ajax.reload();
                            }
                        }
                    });
                }
            })
        });
    </script>
@endsection;
