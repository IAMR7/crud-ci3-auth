<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
  <div class="sidebar-brand-icon">
    <i class="fas fa-list"></i>
  </div>
  <div class="sidebar-brand-text mx-3">My Data</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item <?php if($this->uri->segment(1)=="admin"){echo "active";}?>">
  <a class="nav-link" href="<?php echo base_url(); ?>admin">
    <i class="fas fa-fw fa-home"></i>
    <span>Home</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Management Umum
</div>

<li class="nav-item <?php if($this->uri->segment(1)=="buku"){echo "active";}?>">
  <a class="nav-link" href="<?php echo base_url(); ?>buku">
    <i class="fas fa-fw fa-book-open"></i>
    <span>Daftar Buku</span>
  </a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->