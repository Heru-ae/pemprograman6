<div class="container p-5">
    <a href="<?= base_url('pelanggan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Data Pelanggan</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pelanggan/add');?>">
                <div class="form-group">
                    <label for="">Nama Pelanggan</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">no telepon</label>
                    <input type="number" name="no_telepon" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">status</label>
                    <input type="text" name="status" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>