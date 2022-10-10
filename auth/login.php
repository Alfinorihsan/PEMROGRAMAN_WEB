<?php

session_start();

if(isset($_SESSION['status'])) {
  if($_SESSION['role'] == 'admin') {
    header("Location:../admin/dashboard");
  } else {
    header("Location:../user/dashboard");
  }
}

if(isset($_POST['email'])) {
  if($_POST['email'] == 'admin@ppl.com' && $_POST['password'] == '123456') {
    $_SESSION['email'] = 'admin@ppl.com';
    $_SESSION['role'] = 'admin';
    $_SESSION['status'] = "login";
    header("Location:../admin/dashboard");
  } else if($_POST['email'] == 'user@ppl.com' && $_POST['password'] == '123456') {
    $_SESSION['email'] = 'user@ppl.com';
    $_SESSION['role'] = 'user';
    $_SESSION['status'] = "login";
    header("Location:../user/dashboard");
  } else {
    header("Location:./login.php?denied=true");
  }
}
?>
<?php  require_once('../layouts/auth/header.php') ?>
<div class="row justify-content-center form-bg-image">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">
            <div class="text-center text-md-center mb-4 mt-md-0">
              <h2 class="font-bold" style="font-weight: bold;">PPL</h2>
              <h4 style="font-weight: light;">Pochinki Premier League</h4>
            </div>
            <form action="" class="mt-4" method="POST">
                <!-- Form -->
                <div class="form-group mb-4">
                    <label for="email">Email</label>
                    <div class="input-group">
                        <input type="text" name="email" class="form-control" placeholder="email" id="email" autofocus required>
                    </div>  
                </div>
                <!-- End of Form -->
                <div class="form-group">
                    <!-- Form -->
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" name="password" placeholder="Password" class="form-control" id="password" required>
                        </div>  
                    </div>
                    <!-- End of Form -->
                    <div class="d-flex justify-content-between align-items-top mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="remember">
                            <label class="form-check-label mb-0" for="remember">
                              Ingat saya
                            </label>
                        </div>
                        <div><a href="./forgot-password.html" class="small text-right">Lupa password?</a></div>
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary text-white">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php  require_once('../layouts/auth/footer.php') ?>
