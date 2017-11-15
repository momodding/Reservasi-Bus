<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
  <li class="header">MAIN NAVIGATION</li>
  <li class="active treeview">
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Bus</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url(); ?>admin/bus"><i class="fa fa-circle-o"></i> Data Bus</a></li>
      <li><a href="<?php echo base_url(); ?>admin/jadwal"><i class="fa fa-circle-o"></i> Jadwal Bus</a></li>
      <li><a href="<?php echo base_url(); ?>admin/trayek"><i class="fa fa-circle-o"></i> Trayek Bus</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Penumpang</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url(); ?>admin/penumpanng"><i class="fa fa-circle-o"></i> Data Penumpang</a></li>
    </ul>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-pie-chart"></i>
      <span>Pool</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li><a href="<?php echo base_url(); ?>admin/pool"><i class="fa fa-circle-o"></i> Data Pool</a></li>
    </ul>
  </li>
</ul>
