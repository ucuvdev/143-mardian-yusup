@extends('layout.index');
@section('title', 'Penyaluran Zakat Fitrah');
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
                                    <i class="fas fa-plus-circle"></i> Tambah Penyaluran Zakat Fitrah
                                </button>
                                <table class="table table-striped dt-responsive no-wrap" cellspacing="0" width="100%"
                                    id="penyaluranTable">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">ASNAF</th>
                                            <th class="text-center">JML MUSTAHIK</th>
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
            $('#penyaluranTable').DataTable();
        });
    </script>
@endsection;
