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
      alert("Data Save: " + data);
    }
  });
}
</script>
<script type="text/javascript">
$(document).ready(function(e) {
  $('.select2').select2();

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
    <h3 class="box-title">Tambah Data Bus</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" id="bus-form">
    <div class="box-body">
      <div class="form-group">
        <label>ID Bus</label>
        <input type="text" name="bus" id="bus" class="form-control" placeholder="ID Bus" data-inputmask='"mask": "BUS-999999"' data-mask>
      </div>
      <div class="form-group">
        <label>ID Trayek</label>
        <select class="form-control select2" name="trayek" style="width: 100%;">
          <?php
            foreach ($idtrayek->result() as $row) {
           ?>
          <option value="<?php echo $row->id_trayek; ?>"><?php echo $row->id_trayek; ?></option>
        <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="NopolBus">Nomor Polisi Bus</label>
        <input type="text" name="nopol" id="nopol" class="form-control" placeholder="Nomor Polisi Bus" data-inputmask='"mask": "aa 9999 aa"' data-mask>
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
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" name="simpan" id="simpan" onclick="save()" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->
