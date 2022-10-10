
<ul class="nav flex-column pt-3 pt-md-0">
  <li class="nav-item">
    <a href="<?= $_SESSION['role'] == 'admin' ? '../../admin/dashboard' : '../../user/dashboard' ?>" class="nav-link d-flex align-items-center justify-content-center">
      <span class="sidebar-icon text-center">
        <h3 style="font-weight: bold;">PPL</h3>
        <p class="tex-muted">Pochinki Premier League</p>
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
    <a href="../../admin/matches/create.php" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-award"></i></span>
        <span class="sidebar-text">Hasil Pertandingan</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/matches" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-futbol"></i></span>
        <span class="sidebar-text">Pertandingan</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/fixtures" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-flag-checkered"></i></span>
        <span class="sidebar-text">Fixtures</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../admin/tables" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-table"></i></span>
        <span class="sidebar-text">Tables</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <span
      class="nav-link  collapsed  d-flex justify-content-between align-items-center"
      data-bs-toggle="collapse" data-bs-target="#submenu-components">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-database"></i></span> 
        <span class="sidebar-text">Data Master</span>
      </span>
      <span class="link-arrow"><i class="fa-solid fa-arrow-right"></i></span>
    </span>
    <div class="multi-level collapse " role="list"
      id="submenu-components" aria-expanded="false">
      <ul class="flex-column nav">
        <li class="nav-item">
          <a class="nav-link"
            href="../../admin/club">
            <span class="sidebar-text">Klub</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="../../admin/user">
            <span class="sidebar-text">Pengguna</span>
          </a>
        </li>
      </ul>
    </div>
  </li>
  <?php else: ?>
    <li class="nav-item">
    <a href="../../user/matches" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-futbol"></i></span>
        <span class="sidebar-text">Pertandingan</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../user/fixtures" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-flag-checkered"></i></span>
        <span class="sidebar-text">Fixtures</span>
      </span>
    </a>
  </li>
  <li class="nav-item">
    <a href="../../user/tables" class="nav-link d-flex justify-content-between">
      <span>
        <span class="sidebar-icon"><i class="fa-solid fa-table"></i></span>
        <span class="sidebar-text">Tables</span>
      </span>
    </a>
  </li>
  <?php endif ?>
  
</ul>