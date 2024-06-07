@extends('layout.index')
@section('title', 'Data Asnaf')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('title')</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-icon icon-left btn-primary mb-4" id="btn-tambah-asnaf">
                                <i class="fas fa-plus-circle"></i> Tambah Data Asnaf
                            </button>
                            <table class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%"
                                id="asnafTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">ASNAF</th>
                                        <th class="text-center">PERSENTASE PENYALURAN</th>
                                        <th class="text-center">AKSI</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="view-modal" style="display: none;"></div>

    <!-- Modal Tambah-->
    <div class="modal fade modal-form" id="tambahAsnafModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Asnaf</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="nm_asnaf">Asnaf/Kategori Mustahik</label>
                            <input type="text" class="form-control" name="nm_asnaf" id="nm_asnaf"
                                placeholder="Nama Asnaf atau Kategori Mustahik" autocomplete="off"
                                oninput="this.value = this.value.toUpperCase()" autofocus>
                            <div class="invalid-feedback error-asnaf mb-1"></div>
                        </div>
                        <div class="form-group">
                            <label for="persentase_penyaluran">Persentase Penyaluran</label>
                            <input type="number" class="form-control" name="persentase_penyaluran"
                                id="persentase_penyaluran" placeholder="Persentase Penyaluran" autocomplete="off">
                            <div class="invalid-feedback error-persentase mb-1"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" id="simpan-asnaf">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#asnafTable').DataTable({
                lengthChange: false,
                pageLength: 5,
                processing: true,
                serverSide: true,
                ajax: "{{ route('asnaf.index') }}",
                columnDefs: [{
                    targets: '_all',
                    className: 'dt-body-middle'
                }, {
                    targets: [0, 2, 3],
                    className: 'dt-body-center'
                }],
                columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false,
                    sWidth: '10%',
                }, {
                    data: 'nm_asnaf',
                    name: 'nm_asnaf',
                    sWidth: '45%',
                }, {
                    data: 'persentase_penyaluran',
                    name: 'persentase_penyaluran',
                    sWidth: '25%',
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

        $('body').on('click', '#btn-tambah-asnaf', function() {
            $('#tambahAsnafModal').modal('show');

            $('#simpan-asnaf').click(function() {
                $.ajax({
                    url: 'asnaf',
                    type: 'post',
                    data: {
                        nm_asnaf: $('#nm_asnaf').val(),
                        persentase_penyaluran: $('#persentase_penyaluran').val(),
                    },
                    success: function(response) {
                        if (response.errors) {
                            if (response.errors.nm_asnaf) {
                                $('#nm_asnaf').addClass('is-invalid');
                                $('.error-asnaf').html(response.errors.nm_asnaf);
                            } else {
                                $('#nm_asnaf').removeClass('is-invalid');
                                $('.error-asnaf').html('');
                            }

                            if (response.errors.persentase_penyaluran) {
                                $('#persentase_penyaluran').addClass('is-invalid');
                                $('.error-persentase').html(response.errors
                                    .persentase_penyaluran);
                            } else {
                                $('#persentase_penyaluran').removeClass('is-invalid');
                                $('.error-persentase').html('');
                            }
                        } else {
                            Swal.fire({
                                title: 'Berhasil!',
                                text: response.success,
                                icon: 'success',
                            });
                            $('#asnafTable').DataTable().ajax.reload();
                            $('#tambahAsnafModal').modal('hide');
                        }
                    }
                });
            });
        });

        $('body').on('click', '#btn-edit-asnaf', function() {
            var id = $(this).data('id');
            $.ajax({
                url: 'asnaf/' + id + '/edit',
                type: 'get',
                success: function(response) {
                    if (response) {
                        $('.view-modal').html(response).show();
                        $('#editAsnafModal').modal('show');
                    }
                }
            });
        })

        $('body').on('click', '#btn-hapus-asnaf', function() {
            var id = $(this).data('id');
            Swal.fire({
                title: 'Hapus',
                html: 'Yakin untuk menghapus data asnaf ini?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#3085d6',
                confirmButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: 'asnaf/' + id,
                        type: 'delete',
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: response.success,
                                    icon: 'success',
                                });
                                $('#asnafTable').DataTable().ajax.reload();
                            }
                        }
                    });
                }
            })
        });
    </script>
@endsection
