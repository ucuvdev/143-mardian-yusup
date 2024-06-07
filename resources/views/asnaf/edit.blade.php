<div class="modal fade modal-form" id="editAsnafModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Asnaf</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nm_asnaf">Asnaf/Kategori Mustahik</label>
                        <input type="hidden" name="id" id="id-asnaf" value="{{ $data->id }}">
                        <input type="text" class="form-control" name="nm_asnaf" id="nm_asnaf"
                            placeholder="Nama Asnaf atau Kategori Mustahik" autocomplete="off"
                            oninput="this.value = this.value.toUpperCase()" autofocus value="{{ $data->nm_asnaf }}">
                        <div class="invalid-feedback error-asnaf mb-1"></div>
                    </div>
                    <div class="form-group">
                        <label for="persentase_penyaluran">Persentase Penyaluran</label>
                        <input type="number" class="form-control" name="persentase_penyaluran"
                            id="persentase_penyaluran" placeholder="Persentase Penyaluran" autocomplete="off"
                            value="{{ $data->persentase_penyaluran }}">
                        <div class="invalid-feedback error-persentase mb-1"></div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="update-asnaf">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#update-asnaf').click(function() {
        var id = $('#id-asnaf').val();
        $.ajax({
            url: 'asnaf/' + id,
            type: 'put',
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
                    $('#editAsnafModal').modal('hide');
                }
            }
        });
    });
</script>
