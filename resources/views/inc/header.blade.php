<!-- <nav class="navbar navbar-dark bg-success navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="/image/3.png"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Beranda</a></li>
      <li><a href="#">Profil</a></li>
      <li><a href="#">Lapak Saya</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pengaturan
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pengaturan Lapak</a></li>
          <li><a href="#">Pengaturan Profil</a></li>
        </ul>
      </li>
      <li><a href="/keluar"><span class="glyphicon glyphicon-log-out"></span> <i>Logout</i> </a></li>
    </ul>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="/seller_login"><img src="image/3.png " style="width: 70px; height: auto;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/seller_login">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/berandauser">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lapak saya</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pengaturan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
      <ul class="navbar-nav" style="padding-right: 15px;">
        <a href="/keluar">
        <button type="button" class="btn btn-default btn-sm">
          <span class="glyphicon">&#xe163;</span> 
          <i>Log out</i>
        </button>
      </a>
    </ul>
</nav>