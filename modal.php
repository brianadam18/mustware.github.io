<div class="modal fade" id="myEntry" role="dialog">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Penjualan</h4>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label>Tanggal</label>
              <input required type="text" name="tgl" id="tgl" class="form-control" autocomplete="on">
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <select required class="form-control" name="nama" onchange="fetch_select(this.value);">
              <option>Nama Barang</option>
                <?php 
                $query = "SELECT * FROM tb_barang group by nama_brg";
                $data = 'nama_brg';
                $barang->option($query,$data);                
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Harga Jual / unit</label>
              <select class="form-control" name="harga" id="new_select"></select>
              <!-- <input type="text" name="harga" class="form-control" placeholder="Harga" autocomplete="off"> -->
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input required type="text" name="jumlah" class="form-control" placeholder="Jumlah" autocomplete="off">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <input type="reset" class="btn btn-danger" value="Reset">
              <input type="submit" name="btn-save" class="btn btn-primary" value="Simpan">
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Barang</h4>
        </div>
        <div class="modal-body">
          <form method="post" enctype="multipart/form-data">
          	<div class="form-group">
          		<label>Nama Barang</label>
          		<input required type="text" name="nama_brg" class="form-control" placeholder="Nama Barang ..">
          	</div>
          	<div class="form-group">
          		<label>jenis</label>
          		<input required type="text" name="jenis" class="form-control" placeholder="Jenis Barang ..">
          	</div>
          	<div class="form-group">
          		<label>Suplier</label>
          		<input required type="text" name="suplier" class="form-control" placeholder="Suplier ..">
          	</div>
          	<div class="form-group">
          		<label>Harga Modal</label>
          		<input required type="text" name="harga_modal" class="form-control" placeholder="Modal per unit ..">
          	</div>
          	<div class="form-group">
          		<label>Harga jual</label>
          		<input required type="text" name="harga_jual" class="form-control" placeholder="Harga Jual per unit ..">
          	</div>
            <div class="form-group">
              <label>Jumlah</label>
              <input required type="text" name="jumlah" class="form-control" placeholder="Jumlah ..">
            </div>	
            <div class="form-group">
          		<label>Gambar</label>
          		<input required type="file" name="gambar">
          	</div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input required type="text" name="deskripsi" class="form-control" placeholder="Deskripsi ..">
            </div>  
            <div class="form-group">

          	<div class="modal-footer">
          		<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          		<input type="submit" name="btn-save" class="btn btn-primary" value="Simpan">
          	</div>
          </form>
        </div>
      </div>
      
    </div>
  </div>


  <!-- My Entry -->
  <div class="modal fade" id="myEntry" role="dialog">
    <div class="modal-dialog">
      
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Penjualan</h4>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label>Tanggal</label>
              <input required type="text" name="tgl" id="tgl" class="form-control" autocomplete="on">
            </div>
            <div class="form-group">
              <label>Nama Barang</label>
              <select required class="form-control" name="nama" onchange="fetch_select(this.value);">
              <option>Nama Barang</option>
                <?php 
                $query = "SELECT * FROM tb_barang group by nama_brg";
                $data = 'nama_brg';
                $barang->option($query,$data);                
                ?>
              </select>
            </div>

            <div class="form-group">
              <label>Harga Jual / unit</label>
              <select class="form-control" name="harga" id="new_select"></select>
              <!-- <input type="text" name="harga" class="form-control" placeholder="Harga" autocomplete="off"> -->
            </div>
            <div class="form-group">
              <label>Jumlah</label>
              <input required type="text" name="jumlah" class="form-control" placeholder="Jumlah" autocomplete="off">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <input type="reset" class="btn btn-danger" value="Reset">
              <input type="submit" name="btn-save" class="btn btn-primary" value="Simpan">
            </div>

          </form>
        </div>
      </div>

    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#tgl").datepicker({dateFormat : 'yy-mm-dd'});
    });
  </script>
