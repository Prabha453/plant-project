
<nav class="navbar navbar-expand-lg  bg-light border p-3">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img src=".\img\logo.png" width="40" height="40">
        <b class="text-dark">Plant<sub class="text-success"> Shop</sub></b></a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav  ms-auto">
	  <?php 
		session_start();
		if(count($_SESSION) > 0){
			echo '
      <li class="nav-item">
      <a class="nav-link" href="#"> <i class="fa fa-user"></i>&nbsp'.$_SESSION["username"].'</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-to-bracket"></i> Logout</a>';
		}else{
			echo '<li><a href="login.php" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>';
		}
	  ?>
    </ul>
  </div>
  </div>
</nav>
