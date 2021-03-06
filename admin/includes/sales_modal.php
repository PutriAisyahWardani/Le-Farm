<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Tambah</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="sales_add.php">
              <div class="form-group">
                    <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Nama Pembeli</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="transaction" class="col-sm-3 control-label">Transaksi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="transaction" name="transaction" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="total" class="col-sm-3 control-label">Total</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="total" name="total" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Simpan</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Menghapus...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="sales_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>HAPUS TRANSAKSI</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Hapus</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Update</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="sales_edit.php">
              <div class="form-group">
                    <label for="tanggal" class="col-sm-3 control-label">Tanggal</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="tanggal" name="tanggal" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Nama Pembeli</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="transaction" class="col-sm-3 control-label">Transaksi</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="transaction" name="transaction" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="total" class="col-sm-3 control-label">Total</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="total" name="total" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Simpan</button>
              </form>
            </div>
        </div>
</div>
