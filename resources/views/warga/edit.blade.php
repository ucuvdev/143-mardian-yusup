<div class="modal fade modal-form" id="editWargaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Warga</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_kk">Nama Kepala Keluarga</label>
                        <input type="hidden" name="id" id="id-warga" value="{{ $data->id }}">
                        <input type="text" class="form-control" name="nama_kk" id="nama_kk"
                            placeholder="Nama Kepala Keluarga" autocomplete="off"
                            oninput="this.value = this.value.toUpperCase()" autofocus value="{{ $data->nama_kk }}">
                        <div class="invalid-feedback error-kk mb-1"></div>
                    </div>
                    <div class="form-group">
                        <label for="jml_jiwa">Jumlah Jiwa</label>
                        <input type="number" class="form-control" name="jml_jiwa" id="jml_jiwa"
                            placeholder="Jumlah Jiwa" autocomplete="off" value="{{ $data->jml_jiwa }}">
                        <div class="invalid-feedback error-jml mb-1"></div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat"
                            autocomplete="off" oninput="this.value = this.value.toUpperCase()"
                            value="{{ $data->alamat }}">
                        <div class="invalid-feedback error-alamat mb-1"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="update-warga">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#update-warga').click(function() {
        var id = $('#id-warga').val();
        $.ajax({
            url: 'warga/' + id,
            type: 'put',
            data: {
                nama_kk: $('#nama_kk').val(),
                jml_jiwa: $('#jml_jiwa').val(),
                alamat: $('#alamat').val(),
            },
            success: function(response) {
                if (response.errors) {
                    if (response.errors.nama_kk) {
                        $('#nama_kk').addClass('is-invalid');
                        $('.error-kk').html(response.errors.nama_kk);
                    } else {
                        $('#nama_kk').removeClass('is-invalid');
                        $('.error-kk').html('');
                    }

                    if (response.errors.jml_jiwa) {
                        $('#jml_jiwa').addClass('is-invalid');
                        $('.error-jml').html(response.errors.jml_jiwa);
                    } else {
                        $('#jml_jiwa').removeClass('is-invalid');
                        $('.error-jml').html('');
                    }

                    if (response.errors.alamat) {
                        $('#alamat').addClass('is-invalid');
                        $('.error-alamat').html(response.errors.alamat);
                    } else {
                        $('#alamat').removeClass('is-invalid');
                        $('.error-alamat').html('');
                    }
                } else {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: response.success,
                        icon: 'success',
                    });
                    $('#wargaTable').DataTable().ajax.reload();
                    $('#editWargaModal').modal('hide');
                }
            }
        })
    })
</script>
