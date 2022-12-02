
<ul class="nav flex-column pt-3 pt-md-0">
  <li class="nav-item">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link d-flex align-items-center justify-content-center">
      <span class="sidebar-icon">
        <img src="../../assets/web/img/logo/logo.png" height="60">
      </span>
    </a>
  </li>
  <li class="nav-item  active ">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link">
      <span class="sidebar-icon">
        <i class="fa-solid fa-gauge-high"></i>
      </span> 
      <span class="sidebar-text">Dashboard</span>
    </a>
  </li>
  <?php if($_SESSION['role'] == 'admin'): ?>
    <li class="nav-item">
    <a href="../../admin/order/create.php" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-plus"></i></span>
        <span class="sidebar-text">Tambah Pesanan</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/order" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-shirt"></i></span>
        <span class="sidebar-text">Pesanan</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/service" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-mitten"></i></span>
        <span class="sidebar-text">Layanan</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/user" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-user"></i></span>
        <span class="sidebar-text">Daftar Pengguna</span>
      </span>
    </a>
  </li>
  <?php else: ?>
    <li class="nav-item">
    <a href="../../user/order" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-futbol"></i></span>
        <span class="sidebar-text">Pesanan</span>
      </span>
    </a>
  </li>
  <?php endif ?>
  
</ul>