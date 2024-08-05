<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
      <!-- Navbar -->
      <x-navbar />
       <!-- /.navbar -->
        
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="#" class="brand-link">
            <img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AMAMUS</span>
          </a>
      
          <!-- Sidebar -->
          <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                <a href="#" class="d-block">{{userFullName()}}</a>
              </div>
            </div>
      
            <!-- Sidebar Menu -->
            <x-menu />
            <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
        </aside>
                <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Main content -->
          <div class="content">
            <div class="container-fluid">
              @yield("contenu")
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
          <!-- Control sidebar content goes here -->
          <div class="card bg-dark">
            <div class="card-body bg-dark box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="/dist/img/user4-128x128.jpg" alt="User profile picture">
              </div>
      
              <h3 class="profile-username text-center">{{userfullName()}}</h3>
      
              <p class="text-muted text-center">{{getrolesName()}}</p>
      
              <ul class="list-group bg-dark mb-3">
                <li class="list-group-item">
                  <a href="#" class="d-flex align-items-center"><i class="fa fa-lock pr-2"></i><b>Mot de passe</b></a>
                </li>
                <li class="list-group-item">
                  <a href="#" class="d-flex align-items-center"><i class="fa fa-user pr-2"></i><b>Mon profile</b></a>
                </li>
              </ul>
      
              <a class="btn btn-primary btn-block" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                    Déconnexion
              </a>
      
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          
      </aside>
        <!-- /.control-sidebar -->

        <!--Stop-->
            <!-- Main Footer -->
            <footer class="main-footer">
              <strong>Copyright &copy; 2024 <a href="https://adminlte.io">systech.ml</a>.</strong>
              All rights reserved.
              <!--<div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
              </div>-->
            </footer>
          </div>
          <!-- ./wrapper -->
          
          <!-- REQUIRED SCRIPTS -->         
          <!-- jQuery -->
          <script src="/plugins/jquery/jquery.min.js"></script>
          <!-- Bootstrap -->
          <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
          <!-- AdminLTE -->
          <script src="/dist/js/adminlte.js"></script>
  
          @livewireStyles
  
</body>
</html>

