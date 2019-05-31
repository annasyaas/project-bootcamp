<div class="modal fade" tabindex="-1" role="dialog" id="modal-form">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{ url('admin/categories') }}" method="post" id="form-add">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="name">Nama Kategori <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Nama Kategori..." required>
                </div>
                <div class="form-group">
                    <label for="description">Deksripsi <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="description" id="description" placeholder="Deskripsi Kategori..."></textarea>                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">
                    Simpan Data
                </button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Batal
                </button>
            </div>
        </form>
      </div>
    </div>
</div>