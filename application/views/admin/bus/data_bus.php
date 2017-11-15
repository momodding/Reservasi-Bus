<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<div class="box">
  <div class="row">
    <div class="col-md-8">
      <div class="box-header">
        <h3 class="box-title">Data Bus</h3>
      </div>
    </div>
    <div class="col-md-2 col-xs-4 col-md-offset-2 col-xs-offset-4">
      <a href="<?php echo base_url(); ?>admin/bus/tambah" class="btn btn-primary btn-sm" style="margin-top: 10px !Important;">Tambah data</a>
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
          foreach ($data->result() as $row) {
         ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row->id_bus; ?></td>
        <td><?php echo $row->nopol_bus; ?></td>
        <td><?php echo $row->kelas; ?></td>
        <td><?php echo $row->tarif; ?></td>
        <td><?php echo $row->total_seat; ?></td>
        <td>
          <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>admin/bus/edit/<?php echo $row->id_bus;?>">edit</a>
          <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>admin/bus/delete/<?php echo $row->id_bus;?>" onclick="return confirm('Anda yakin mau menghapus data ini??');">delete</a>
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
