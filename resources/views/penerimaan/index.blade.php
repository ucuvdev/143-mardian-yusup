@extends('layout.index');
@section('title', 'Penerimaan Zakat Fitrah');
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>
            <div class="section-body">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-icon icon-left btn-primary mb-4" id="btn-tambah-penerimaan">
                                    <i class="fas fa-plus-circle"></i> Tambah Penerimaan Zakat Fitrah
                                </button>
                                <table class="table table-striped dt-responsive no-wrap" cellspacing="0" width="100%"
                                    id="penerimaanTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">NAMA KK</th>
                                            <th class="text-center">JML MUZAKKI</th>
                                            <th class="text-center">JML UANG</th>
                                            <th class="text-center">JML BERAS</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.modal-form').on('shown.bs.modal', function() {
                $(this).find('[autofocus]').focus();
            });

            $('#penerimaanTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('penerimaan.index') }}",
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    searchble: false,
                    orderable: false
                }, {
                    data: 'nama_kk'
                    name: 'nama_kk'
                }, {
                    data: 'jml_muzakki',
                    name: 'jml_muzakki'
                }, {
                    name: 'jml_beras',
                    data: 'jml_beras'
                }, {
                    name: 'jml_uang',
                    data: 'jml_uang'
                }, {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    sWidth: '10%',
                }]
            });
        });
    </script>
@endsection;
