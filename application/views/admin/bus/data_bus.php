<div class="box">
  <div class="row">
    <div class="col-md-8">
      <div class="box-header">
        <h3 class="box-title">Data Bus</h3>
      </div>
    </div>
    <div class="col-md-2 col-xs-4 col-md-offset-2 col-xs-offset-4">
      <button style="margin-top: 10px !Important;" onclick="add_bus()" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">Tambah Data</button>
    </div>
  </div>

  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
      <thead>
      <tr>
        <th>No</th>
        <th>Nomor Bus</th>
        <th>Nomor Polisi</th>
        <th>Kelas</th>
        <th>Tarif</th>
        <th>Total Seat</th>
        <th>Action</th>
      </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          foreach ($data as $row) {
         ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->id_bus; ?></td>
        <td><?php echo $row->nopol_bus; ?></td>
        <td><?php echo $row->kelas; ?></td>
        <td><?php echo $row->tarif; ?></td>
        <td><?php echo $row->total_seat; ?></td>
        <td>
          <button type="button" onclick="edit_bus('<?php echo $row->id_bus; ?>')" class="btn btn-primary">edit</button>
          <button type="button" onclick="delete_bus('<?php echo $row->id_bus; ?>')" class="btn btn-danger">delete</button>
        </td>
      </tr>
      <?php } ?>
      </tbody>
      <tfoot>
      <tr>
        <th>No</th>
        <th>Nomor Bus</th>
        <th>Nomor Polisi</th>
        <th>Kelas</th>
        <th>Tarif</th>
        <th>Total Seat</th>
        <th>Action</th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- /.box-body -->
</div>

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Bus</h4>
              </div>
              <div class="modal-body">
                <form role="form" id="bus-form">
                  <div class="box-body">
                    <div class="form-group">
                      <label>ID Bus</label>
                      <input type="text" name="bus" id="bus" class="form-control" placeholder="ID Bus" data-inputmask='"mask": "BUS-999999"' data-mask>
                    </div>
                    <div class="form-group">
                      <label>ID Trayek</label>
                      <select class="form-control select2-trayek" name="trayek" style="width: 100%;">
                        <option value=""></option>
                        <?php
                          foreach ($idtrayek->result() as $row) {
                         ?>
                        <option value="<?php echo $row->id_trayek; ?>"><?php echo $row->id_trayek; ?></option>
                      <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="NopolBus">Nomor Polisi Bus</label>
                      <input type="text" name="nopol" id="nopol" class="form-control" onBlur="javascript:{this.value = this.value.toUpperCase(); }" placeholder="Nomor Polisi Bus" data-inputmask='"mask": "aa 9999 aa"' data-mask>
                    </div>
                    <div class="form-group">
                      <label for="KelasBus">Kelas</label>
                      <select class="form-control select2-kelas" name="kelas" style="width: 100%;">
                        <option value=""></option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="Executive">Executive</option>
                        <option value="Super Executive">Super Executive</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="TarifBus">Tarif</label>
                      <input type="text" class="form-control" name="tarif" id="tarif" placeholder="Tarif" >
                    </div>
                    <div class="form-group">
                      <label for="SeatBus">Total Seat Tersedia</label>
                      <input type="text" class="form-control" name="seat" id="seat" placeholder="Seat">
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" onclick="save()" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<script type="text/javascript">

//Add On JS
  $(document).ready(function(e) {
  $('#example1').DataTable();
  $('.select2-trayek').select2({
    placeholder: "Pilih Kode Trayek",
    allowClear: true
  });

  $('.select2-kelas').select2({
    placeholder: "Pilih kelas Bus",
    allowClear: true
  });

  $("input").inputmask();
  //$('[data-mask]').inputmask();

});
//Ajax Function
  var form_method;
  var tabel;
 
function add_bus() {
  form_method = 'insert';
  $('#bus-form')[0].reset();
  $('.select2-trayek').select2({
    placeholder: "Pilih Kode Trayek",
    allowClear: true
  });

  $('.select2-kelas').select2({
    placeholder: "Pilih kelas Bus",
    allowClear: true
  });  
}
function save() {
  if (form_method == 'insert') {
    var url = '<?php echo base_url(); ?>admin/bus/simpan';
  }else{
    var url = '<?php echo base_url(); ?>admin/bus/update';
  }
  var data = $("#bus-form").serialize();
  $.ajax({
    url: url,
    type: "POST",
    data: data,
    dataType: "JSON",
    success: function(data){
      //alert('Data Sukses Disimpan');
      $('#modal-default').modal('hide');
      location.reload();
      swal("Berhasil","Data Sukses Disimpan","success");
    },
    error: function(jqXHR, textStatus, errorThrown) {
      //alert('Error Tambah data. Cek Kolom kembali atau data sudah ada dalam database');
      $('#modal-default').modal('hide');
      swal("Gagal","Error Tambah data. Cek Kolom kembali atau data sudah ada dalam database", "error");
    }
  });
}

function edit_bus(key) {
  form_method = 'update';
  $('#trayek').select2();
  $('#kelas').select2();
  $('#bus-form')[0].reset();
  $.ajax({
    url: '<?php echo base_url(); ?>admin/bus/edit/'+key,
    type: "GET",
    dataType: "JSON",
    success: function (data) {
      $('#modal-default').modal('show');
      $('#modal-title').text('Edit Bus');

      $('#bus').val(data.id_bus);
      $('.select2-trayek').val(data.id_trayek).trigger("change");
      $('#nopol').val(data.nopol_bus);
      $('#kelas').val('data.kelas').trigger('change');
      $('.select2-kelas').val(data.kelas).trigger("change");
      $('#tarif').val(data.tarif);
      $('#seat').val(data.total_seat);
    },
    error: function (jqXHR, textStatus, errorThrown) {
      swal('Error ambil data');
    }
  });
}

function delete_bus(key) {
  if (confirm('Are u sure want to delete this data?')) {
    $.ajax({
      url: '<?php echo base_url(); ?>admin/bus/delete/'+key,
      type: "POST",
      dataType: "JSON",
      success: function (data) {
        swal("Berhasil","Data Sukses Dihapus","success");
        location.reload();        
      },
      error: function (jqXHR, textStatus, errorThrown) {
        swal('Error ambil data');
      }
    });
  }
}

</script>
