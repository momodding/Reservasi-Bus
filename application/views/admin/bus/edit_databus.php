<script type="text/javascript">
function save() {
  var url = '<?php echo base_url(); ?>admin/bus/simpan';
  var data = $("#bus-form").serialize();
  $.ajax({
    url: url,
    type: "POST",
    data: data,
    dataType: "JSON",
    success: function(data){
      //alert('Data Sukses Disimpan');
      swal('Data Sukses Disimpan');

    },
    error: function(jqXHR, textStatus, errorThrown) {
      alert('Error Tambah data. Cek Kolom kembali atau data sudah ada dalam database');
      //swal('Error Tambah data. Cek Kolom kembali atau data sudah ada dalam database');
    }
  });
}
$(document).ready(function(e) {
  function loadData() {
    var url = '<?php echo base_url(); ?>admin/bus/edit';
    //$('#bus-form').reset();
    $.ajax({
      url:  url,
      type: "GET",
      data: {
        id_bus : id_bus;
      },
      dataType: "JSON",
      success: function (data) {
        $('input[name=bus]').val(data.id_bus);
        $('input[name=nopol]').val(data.nopol_bus);
        $('input[name=tarif]').val(data.tarif);
        $('input[name=seat]').val(data.total_seat);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        alert('Error ngambil data');
      }
    });
  }
});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
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


</script>

<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Edit Data Bus</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" id="bus-form" onload="loadData()">
    <div class="box-body">
      <div class="form-group">
        <label>ID Bus</label>
        <input type="text" name="bus" id="bus" class="form-control"  placeholder="ID Bus" data-inputmask='"mask": "BUS-999999"' data-mask>
      </div>
      <div class="form-group">
        <label>ID Trayek</label>
        <select class="form-control select2-trayek" name="trayek" id="trayek" style="width: 100%;">
          <option ></option>
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
        <select class="form-control select2-kelas" name="kelas" id="kelas" style="width: 100%;">
          <option ></option>
          <option value="Ekonomi">Ekonomi</option>
          <option value="Bisnis">Bisnis</option>
          <option value="Executive">Executive</option>
          <option value="Super Executive">Super Executive</option>
        </select>
      </div>
      <div class="form-group">
        <label for="TarifBus">Tarif</label>
        <input type="text" class="form-control" name="tarif" id="tarif" placeholder="Tarif">
      </div>
      <div class="form-group">
        <label for="SeatBus">Total Seat Tersedia</label>
        <input type="text" class="form-control" name="seat" id="seat" placeholder="Seat">
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="simpan" id="simpan" onclick="save()" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
