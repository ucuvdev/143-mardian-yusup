<div class="row mt-sm-4">
    <div class="col-12 col-md-12 col-lg-5">
        <div class="card profile-widget">
            <div class="profile-widget-header">
                <img alt="image" src="{{ asset('/assets/img/avatar/avatar-1.png') }}"
                    class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                </div>
            </div>
            <div class="profile-widget-description">
                <div class="profile-widget-name">Nama UPZ</div>
                <div>Alamat UPZ</div>
                <div>No. Telepon</div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        Ketua
                    </div>
                    <div class="col-8">
                        : Nama Ketua
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Sekretaris
                    </div>
                    <div class="col-8">
                        : Nama Sekretaris
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        Bendahara
                    </div>
                    <div class="col-8">
                        : Nama Bendahara
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <form method="post" class="needs-validation" novalidate="">
                <div class="card-header">
                    <h4>Edit Profil UPZ</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Nama UPZ</label>
                            <input type="text" class="form-control" placeholder="Nama UPZ">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Alamat</label>
                            <input type="text" class="form-control" placeholder="Alamat UPZ">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>No. Telepon</label>
                            <input type="text" class="form-control" placeholder="No. Telepon UPZ">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12">
                            <label>Nilai Konversi Zakat Fitrah</label>
                            <input type="text" class="form-control"
                                placeholder="Nilai Konversi Zakat Fitrah dalam Rupiah">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
